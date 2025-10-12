<?php
$Lheight = array(
    "Andy" => 176,
    "Barry" => 165,
    "Charlie" => 170,
    "David" => 172,
    "Edward" => 180,
    "Frank" => 168,
    "George" => 175,
    "Henry" => 178
);
unset($Lheight["Frank"]);
echo "<b>Data tinggi badan setelah penghapusan:</b><br>";
foreach ($Lheight as $nama => $tinggi) {
    echo $nama . " is " . $tinggi . " cm tall.<br>";
}

$keys = array_keys($Lheight);
$last_key = end($keys);
echo "<br><b>Nilai dengan indeks terakhir:</b><br>";
echo $last_key . " is " . $Lheight[$last_key] . " cm tall.";

$Lweight = array(55, 63, 70);

echo "<br><br><b>Data berat badan (Lweight):</b><br>";
print_r($Lweight);

echo "<br><br>Data kedua dari array Lweight adalah: " . $Lweight[1] . " kg.";
?>
