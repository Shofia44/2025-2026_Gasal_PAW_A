<?php
$produk = array(
    "Laptop" => 8500000,
    "Smartphone" => 4500000,
    "Tablet" => 3200000,
    "Headphone" => 750000,
    "Smartwatch" => 1500000
);

echo "<h3>Daftar Produk dan Harga</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama Produk</th><th>Harga (Rp)</th></tr>";

foreach ($produk as $nama => $harga) {
    echo "<tr>";
    echo "<td>$nama</td>";
    echo "<td>" . number_format($harga, 0, ',', '.') . "</td>";
    echo "</tr>";
}
echo "</table>";

echo "<p><b>Jumlah produk:</b> " . count($produk) . "</p>";
?>
