
<?php
session_start();

require_once 'data/menu.php';
require_once 'includes/fungsi.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirectKe('index.php');
}

$aksi = $_POST['aksi'] ?? '';

if ($aksi === 'tambah') {
    $kode = $_POST['kode'] ?? '';
    $inputJumlah = $_POST['jumlah'] ?? '';

    if (!isset($menu[$kode])) {
        setFlash('Kode menu tidak valid.', 'error');
        redirectKe('index.php');
    }

    if (
        !is_string($inputJumlah) ||
        $inputJumlah === '' ||
        filter_var($inputJumlah, FILTER_VALIDATE_INT) === false
    ) {
        setFlash('Jumlah harus bilangan bulat 1 sampai 10.', 'error');
        redirectKe('index.php');
    }

    $jumlah = (int) $inputJumlah;

    if ($jumlah < 1 || $jumlah > 10) {
        setFlash('Jumlah harus antara 1 sampai 10.', 'error');
        redirectKe('index.php');
    }

    $keranjang = $_SESSION['keranjang'] ?? [];
    $jumlahLama = $keranjang[$kode] ?? 0;

    if ($jumlahLama + $jumlah > 10) {
        setFlash('Penambahan ditolak. Maksimal 10 per menu.', 'error');
        redirectKe('index.php');
    }

    $keranjang[$kode] = $jumlahLama + $jumlah;
    $_SESSION['keranjang'] = $keranjang;

    setFlash('Pesanan berhasil ditambahkan.');
    redirectKe('index.php');
}

if ($aksi === 'hapus') {
    $kode = $_POST['kode'] ?? '';

    if (isset($_SESSION['keranjang'][$kode])) {
        unset($_SESSION['keranjang'][$kode]);
        setFlash('Item berhasil dihapus.');
    } else {
        setFlash('Item tidak ditemukan.', 'error');
    }

    redirectKe('keranjang.php');
}

if ($aksi === 'kosongkan') {
    $_SESSION['keranjang'] = [];
    setFlash('Keranjang berhasil dikosongkan.');
    redirectKe('keranjang.php');
}

if ($aksi === 'favorit') {
    $kategori = $_POST['kategori'] ?? '';

    if (!in_array($kategori, $kategoriMenu, true)) {
        setFlash('Kategori favorit tidak valid.', 'error');
        redirectKe('index.php');
    }

    setcookie('kategori_favorit', $kategori, [
        'expires' => time() + (7 * 24 * 60 * 60),
        'path' => '/',
        'httponly' => true,
        'samesite' => 'Lax'
    ]);

    setFlash('Kategori favorit disimpan selama 7 hari.');
    redirectKe('index.php');
}

setFlash('Aksi tidak dikenal.', 'error');
redirectKe('index.php');
