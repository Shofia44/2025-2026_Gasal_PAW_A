<?php
$mahasiswa = array(
    array("Andi", 85, 80, 90),
    array("Budi", 78, 82, 88),
    array("Citra", 92, 89, 95),
    array("Dewi", 70, 75, 80),
    array("Eko", 88, 84, 90)
);

function hitungRataRata($data) {
    foreach ($data as $mhs) {
        $nama = $mhs[0];
        $rata = ($mhs[1] + $mhs[2] + $mhs[3]) / 3;
        echo "<tr><td>$nama</td><td>$mhs[1]</td><td>$mhs[2]</td><td>$mhs[3]</td><td>" . number_format($rata, 2) . "</td></tr>";
    }
}
echo "<h3>Daftar Nilai Mahasiswa</h3>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Nama</th><th>Tugas</th><th>UTS</th><th>UAS</th><th>Rata-rata</th></tr>";
hitungRataRata($mahasiswa);
echo "</table>";
?>
