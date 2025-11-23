<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php?msg=Silakan login terlebih dahulu!");
    exit;
}
?>
