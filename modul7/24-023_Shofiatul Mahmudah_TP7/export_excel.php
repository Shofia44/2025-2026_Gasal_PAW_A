<?php
include "koneksi.php";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Laporan.xls");

$dari   = $_GET['dari'];
$sampai = $_GET['sampai'];

$query = "SELECT * FROM penerimaan WHERE tanggal BETWEEN '$dari' AND '$sampai'";
$result = mysqli_query($koneksi, $query);

echo "<table border='1'>
<tr>
    <th>Tanggal</th>
    <th>Pelanggan</th>
    <th>Pendapatan</th>
</tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['tanggal']}</td>
        <td>{$row['pelanggan']}</td>
        <td>{$row['pendapatan']}</td>
    </tr>";
}

echo "</table>";
