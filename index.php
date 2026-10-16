
<?php
session_start();

require_once 'data/menu.php';
require_once 'includes/fungsi.php';

$cari = trim($_GET['cari'] ?? '');

if (isset($_GET['kategori'])) {
    $kategoriDipilih = $_GET['kategori'];

    if (
        $kategoriDipilih !== '' &&
        !in_array($kategoriDipilih, $kategoriMenu, true)
    ) {
        $kategoriDipilih = '';
    }
} else {
    $kategoriDipilih = $_COOKIE['kategori_favorit'] ?? '';

    if (!in_array($kategoriDipilih, $kategoriMenu, true)) {
        $kategoriDipilih = '';
    }
}

$hasilMenu = [];

foreach ($menu as $kode => $item) {
    $cocokNama = stripos($item['nama'], $cari) !== false;
    $cocokKategori = (
        $kategoriDipilih === '' ||
        $item['kategori'] === $kategoriDipilih
    );

    if ($cocokNama && $cocokKategori) {
        $hasilMenu[$kode] = $item;
    }
}

$judulHalaman = 'Daftar Menu';
require 'includes/header.php';
?>

<h2>Daftar Menu Kantin</h2>

<form method="GET" action="index.php" class="form-inline">
    <input
        type="text"
        name="cari"
        placeholder="Cari nama menu..."
        value="<?= e($cari) ?>"
    >
    <button type="submit">Cari</button>
    <a href="index.php" class="button-secondary">Reset</a>
</form>

<h3>Filter Kategori</h3>

<form method="GET" action="index.php" class="form-inline">
    <select name="kategori">
        <option value="">Semua Kategori</option>

        <?php foreach ($kategoriMenu as $kategori): ?>
            <option
                value="<?= e($kategori) ?>"
                <?= $kategoriDipilih === $kategori ? 'selected' : '' ?>
            >
                <?= e($kategori) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Filter</button>
</form>

<h3>Kategori Favorit</h3>

<form method="POST" action="proses.php" class="form-inline">
    <input type="hidden" name="aksi" value="favorit">

    <select name="kategori" required>
        <?php foreach ($kategoriMenu as $kategori): ?>
            <option value="<?= e($kategori) ?>">
                <?= e($kategori) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Simpan Favorit 7 Hari</button>
</form>

<?php if ($hasilMenu): ?>

    <div class="menu-grid">
        <?php foreach ($hasilMenu as $kode => $item): ?>
            <div class="card">
                <h3><?= e($item['nama']) ?></h3>
                <p>Kode: <?= e($kode) ?></p>
                <p>Kategori: <?= e($item['kategori']) ?></p>
                <p>Harga: <?= rupiah($item['harga']) ?></p>

                <form method="POST" action="proses.php">
                    <input type="hidden" name="aksi" value="tambah">
                    <input type="hidden" name="kode" value="<?= e($kode) ?>">

                    <label>Jumlah (1–10)</label>
                    <input
                        type="number"
                        name="jumlah"
                        min="1"
                        max="10"
                        step="1"
                        required
                    >

                    <button type="submit">Tambah ke Keranjang</button>
                </form>
            </div>
        <?php endforeach; ?>
    </div>

<?php else: ?>

    <p class="alert error">
        Menu tidak ditemukan. Silakan coba kata kunci lain.
    </p>

<?php endif; ?>

<?php require 'includes/footer.php'; ?>
