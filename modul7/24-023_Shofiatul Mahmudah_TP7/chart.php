<?php
include "koneksi.php";

$dari = $_GET['dari'];
$sampai = $_GET['sampai'];

$query = mysqli_query($koneksi,
    "SELECT tanggal, pendapatan 
     FROM penerimaan
     WHERE tanggal BETWEEN '$dari' AND '$sampai'"
);

$data_tanggal = [];
$data_pendapatan = [];

while ($r = mysqli_fetch_assoc($query)) {
    $data_tanggal[] = $r['tanggal'];
    $data_pendapatan[] = $r['pendapatan'];
}

echo json_encode([
    "tanggal" => $data_tanggal,
    "pendapatan" => $data_pendapatan
]);
?>
