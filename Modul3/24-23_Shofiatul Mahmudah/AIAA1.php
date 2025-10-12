<?php
$Lheight = array(
    "Andy" => 176,
    "Barry" => 165,
    "Charlie" => 170
);
$Lheight["David"] = 172;
$Lheight["Edward"] = 180;
$Lheight["Frank"] = 168;
$Lheight["George"] = 175;
$Lheight["Henry"] = 178;

echo "<b>Data tinggi badan (Lheight):</b><br>";
foreach ($Lheight as $nama => $tinggi) {
    echo $nama . " is " . $tinggi . " cm tall.<br>";
}

$keys = array_keys($Lheight);
$last_key = end($keys);

echo "<br><b>Nilai dengan indeks terakhir:</b><br>";
echo $last_key . " is " . $Lheight[$last_key] . " cm tall.";
?>
