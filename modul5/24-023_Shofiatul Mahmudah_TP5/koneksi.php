<?php
$conn = mysqli_connect("localhost", "root", "", "db_supplier");

// Cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
