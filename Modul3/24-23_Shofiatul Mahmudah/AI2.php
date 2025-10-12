<?php
$Lfruits = array("avocado", "blueberry", "cherry");
$Lfruits[] = "durian";
$Lfruits[] = "mango";
$Lfruits[] = "orange";
$Lfruits[] = "pear";
$Lfruits[] = "watermelon";

echo "<b>Array sebelum dihapus:</b><br>";
print_r($Lfruits);

unset($Lfruits[5]); 
echo "<br><br><b>Array setelah dihapus:</b><br>";
print_r($Lfruits);

$indeks_tertinggi = max(array_keys($Lfruits));

echo "<br><br>Nilai dengan indeks tertinggi adalah: " . $Lfruits[$indeks_tertinggi];
echo "<br>Indeks tertinggi dari array Lfruits adalah: " . $indeks_tertinggi;
?>
