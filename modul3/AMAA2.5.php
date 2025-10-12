<?php
$angka = array(10, 25, 30, 45, 50);
$hasil = array_filter($angka, function($n) {
    return $n > 30;
});

echo "<b>5. Hasil array_filter():</b><br>";
print_r($hasil);
echo "<br><br>";
?>
