<?php
$buah = array("a" => "apel", "b" => "mangga", "c" => "pisang");
$cari = array_search("mangga", $buah);

echo "<b>4. Hasil array_search():</b><br>";
echo "Nilai 'mangga' ada pada key: " . $cari . "<br><br>";
?>
