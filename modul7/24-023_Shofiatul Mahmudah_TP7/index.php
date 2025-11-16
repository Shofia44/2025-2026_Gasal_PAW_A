<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Reporting Toko Amanah</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .no-print { margin: 10px 0; }
        @media print {
            .no-print { display: none; }
        }
        table, th, td{
            border:1px solid black;
            border-collapse: collapse;
            padding:5px;
        }
    </style>
</head>
<body>

<h2>Laporan Penerimaan</h2>

<!-- FILTER -->
<form method="GET" class="no-print">
    Dari: <input type="date" name="dari">
    Sampai: <input type="date" name="sampai">
    <button type="submit">Cari</button>
</form>

<?php
$dari   = $_GET['dari'] ?? "";
$sampai = $_GET['sampai'] ?? "";

$query = "SELECT * FROM penerimaan WHERE 1=1 ";
if ($dari !== "" && $sampai !== "") {
    $query .= "AND tanggal BETWEEN '$dari' AND '$sampai'";
}
$result = mysqli_query($conn, $query);
$data_tanggal = [];
$data_pendapatan = [];
$total_pelanggan = 0;
$total_pendapatan = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $data_tanggal[] = $row['tanggal'];
    $data_pendapatan[] = $row['pendapatan'];
    $total_pelanggan += $row['pelanggan'];
    $total_pendapatan += $row['pendapatan'];
}
?>

<!-- GRAFIK -->
<canvas id="myChart" width="400" height="150"></canvas>

<script>
const ctx = document.getElementById('myChart');
const chart = new Chart(ctx, {
    type: "bar",
    data: {
        labels: <?= json_encode($data_tanggal); ?>,
        datasets: [{
            label: "Pendapatan",
            data: <?= json_encode($data_pendapatan); ?>
        }]
    }
});
</script>

<br>

<!-- REKAP TABEL -->
<h3>Rekapitulasi</h3>
<table>
    <tr>
        <th>Tanggal</th>
        <th>Pelanggan</th>
        <th>Pendapatan</th>
    </tr>

    <?php
    mysqli_data_seek($result, 0);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
            <td>{$row['tanggal']}</td>
            <td>{$row['pelanggan']}</td>
            <td>{$row['pendapatan']}</td>
        </tr>";
    }
    ?>
</table>

<!-- TOTAL -->
<h3>Total</h3>
<p><b>Total Pelanggan :</b> <?= $total_pelanggan ?></p>
<p><b>Total Pendapatan:</b> Rp <?= number_format($total_pendapatan) ?></p>

<!-- TOMBOL PRINT & EXPORT -->
<div class="no-print">
    <button onclick="window.print()">Print</button>
    <a href="export_excel.php?dari=<?= $dari ?>&sampai=<?= $sampai ?>">
        <button>Export Excel</button>
    </a>
</div>

</body>
</html>
