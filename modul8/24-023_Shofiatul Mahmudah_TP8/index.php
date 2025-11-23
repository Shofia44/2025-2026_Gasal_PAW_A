<?php 
include "proteksi.php"; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        nav a{ margin-right:20px; }
    </style>
</head>
<body>

<h2>Selamat datang, <?= $_SESSION['username']; ?>!</h2>

<nav>
    <a href="index.php">Home</a>

    <?php if($_SESSION['level']==1){ ?>
        <a href="data_master.php">Data Master</a>
    <?php } ?>

    <a href="transaksi.php">Transaksi</a>
    <a href="laporan.php">Laporan</a>
    <a href="logout.php" style="color:red">Logout</a>
</nav>

<hr>

<p>Ini halaman dashboard sesuai level user.</p>

</body>
</html>
