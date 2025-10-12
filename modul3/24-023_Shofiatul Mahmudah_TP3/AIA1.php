<?php
$Lfruits = array("avocado","blueberry","cherry");
$buahBaru = array("durian", "mango", "orange", "pear", "watermelon");
for ($i = 0; $i < count($buahBaru); $i++) {
    $Lfruits[] = $buahBaru[$i];
}

$arrlength = count($Lfruits);
for ($x = 0; $x < $arrlength; $x++) {
    echo $Lfruits[$x] . "<br>";
}

echo "<br>Jumlah data dalam array Lfruits saat ini adalah: " . $arrlength;
?>
