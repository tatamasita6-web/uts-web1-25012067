
<?php
session_start();

require_once 'data/menu.php';
require_once 'includes/fungsi.php';

$keranjang = $_SESSION['keranjang'] ?? [];

$subtotal = hitungTotal($keranjang, $menu);
$diskon = hitungDiskon($subtotal);
$totalAkhir = $subtotal - $diskon;

$judulHalaman = 'Keranjang Belanja';
require 'includes/header.php';
?>

<h2>Keranjang Pesanan</h2>

<?php if (empty($keranjang)): ?>

    <p class="alert">
        Keranjang masih kosong. Silakan pilih menu terlebih dahulu.
    </p>

    <a href="index.php" class="button-secondary">Lihat Menu</a>

<?php else: ?>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Menu</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($keranjang as $kode => $jumlah): ?>
                    <?php if (isset($menu[$kode])): ?>
                        <?php
                        $item = $menu[$kode];
                        $subtotalItem = hitungSubtotal(
                            $item['harga'],
                            $jumlah
                        );
                        ?>

                        <tr>
                            <td><?= e($item['nama']) ?></td>
                            <td><?= rupiah($item['harga']) ?></td>
                            <td><?= e($jumlah) ?></td>
                            <td><?= rupiah($subtotalItem) ?></td>
                            <td>
                                <form method="POST" action="proses.php">
                                    <input type="hidden" name="aksi" value="hapus">
                                    <input type="hidden" name="kode" value="<?= e($kode) ?>">
                                    <button type="submit" class="danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="total-box">
        <p>Subtotal Pesanan: <strong><?= rupiah($subtotal) ?></strong></p>
        <p>Diskon: <strong><?= rupiah($diskon) ?></strong></p>
        <h3>Total Akhir: <?= rupiah($totalAkhir) ?></h3>
    </div>

    <form method="POST" action="proses.php">
        <input type="hidden" name="aksi" value="kosongkan">
        <button type="submit" class="danger">Kosongkan Keranjang</button>
    </form>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
