<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['username'] = $data['username'];
    $_SESSION['level']    = $data['level'];
    $_SESSION['login']    = true;

    header("Location: index.php");
} else {
    header("Location: login.php?msg=Username atau password salah!");
}
?>
