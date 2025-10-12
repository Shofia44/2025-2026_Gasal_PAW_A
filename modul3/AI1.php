<?php
$Lfruits = array("avocado", "blueberry", "cherry");
$Lfruits[] = "durian";
$Lfruits[] = "mango";
$Lfruits[] = "orange";
$Lfruits[] = "pear";
$Lfruits[] = "watermelon";

print_r($Lfruits);
$indeks_tertinggi = count($Lfruits) - 1;
echo "<br>Nilai dengan indeks tertinggi adalah: " . $Lfruits[$indeks_tertinggi];
echo "<br>Indeks tertinggi dari array Lfruits adalah: " . $indeks_tertinggi;
?>
