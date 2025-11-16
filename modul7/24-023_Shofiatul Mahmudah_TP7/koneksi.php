<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "toko_amanah";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn) {
    echo "Koneksi berhasil";
}else {
    echo "error:".mysqli_connect_error();
}
?>