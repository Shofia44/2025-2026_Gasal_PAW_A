<?php
$fruits = array("avocado","blueberry","cherry");
$buahBaru = array("durian", "mango", "orange", "pear", "watermelon");
for ($i = 0; $i < count($buahBaru); $i++) {
    $fruits[] = $buahBaru[$i];
}

$arrlength = count($fruits);
echo "<b>Data dalam array Lfruits:</b><br>";
for ($x = 0; $x < $arrlength; $x++) {
    echo $fruits[$x] . "<br>";
}
echo "<br>Jumlah data dalam array Lfruits saat ini adalah: " . $arrlength . "<br><br>";

$Lvegies = array("carrot", "spinach", "broccoli");
$vegiesLength = count($Lvegies);
echo "<b>Data dalam array Lvegies:</b><br>";
for ($i = 0; $i < $vegiesLength; $i++) {
    echo $Lvegies[$i] . "<br>";
}

echo "<br>Jumlah data dalam array Lvegies adalah: " . $vegiesLength;
?>
