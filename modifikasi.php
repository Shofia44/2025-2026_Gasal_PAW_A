<?php
$nilai = 82; 

if ($nilai >= 85 && $nilai <= 100) {
    echo "Nilai Anda: $nilai<br>";
    echo "Nilai: A";
} elseif ($nilai >= 75 && $nilai < 85) {
    echo "Nilai Anda: $nilai<br>";
    echo "Nilai: B";
} elseif ($nilai >= 60 && $nilai < 75) {
    echo "Nilai Anda: $nilai<br>";
    echo "Nilai: C";
} elseif ($nilai >= 50 && $nilai < 60) {
    echo "Nilai Anda: $nilai<br>";
    echo "Nilai: D";
} elseif ($nilai >= 0 && $nilai < 50) {
    echo "Nilai Anda: $nilai<br>";
    echo "Nilai: E";
} else {
    echo "Nilai tidak valid!";
}
?>
