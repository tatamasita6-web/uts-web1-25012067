
<?php
$judulHalaman = $judulHalaman ?? 'Kantin Kampus';
$flash = ambilFlash();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($judulHalaman) ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<header class="header">
    <h1>Pemesanan Kantin Kampus</h1>

    <nav>
        <a href="index.php">Daftar Menu</a>
        <a href="keranjang.php">Keranjang</a>
    </nav>
</header>

<main class="container">

<?php if ($flash): ?>
    <div class="alert <?= e($flash['jenis']) ?>">
        <?= e($flash['pesan']) ?>
    </div>
<?php endif; ?>
