<?php
$buah = array("jeruk", "apel", "mangga", "pisang");

echo "<b>6. Fungsi Sorting:</b><br>";
$buah1 = $buah;
sort($buah1);
echo "sort(): ";
print_r($buah1);
echo "<br>";

$buah2 = $buah;
rsort($buah2);
echo "rsort(): ";
print_r($buah2);
echo "<br>";

$buahAsosiatif = array("b" => "jeruk", "a" => "apel", "c" => "mangga");
asort($buahAsosiatif);
echo "asort(): ";
print_r($buahAsosiatif);
echo "<br>";

arsort($buahAsosiatif);
echo "arsort(): ";
print_r($buahAsosiatif);
echo "<br>";

ksort($buahAsosiatif);
echo "ksort(): ";
print_r($buahAsosiatif);
echo "<br>";

krsort($buahAsosiatif);
echo "krsort(): ";
print_r($buahAsosiatif);
echo "<br>";
?>
