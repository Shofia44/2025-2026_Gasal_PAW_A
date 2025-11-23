<?php 
include "proteksi.php"; 

if($_SESSION['level'] != 1){
    die("Anda tidak memiliki hak akses ke halaman ini!");
}
?>
<h2>Data Master (Admin Level 1)</h2>
<a href="index.php">Kembali</a>
