<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'login';

$koneksi = mysqli_connect('localhost','root','','login');
if ($koneksi) {
echo "Koneksi berhasil";
}else {
echo "error:".mysqli_connect_error();
}
?>