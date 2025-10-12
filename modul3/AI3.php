<?php
$Lvegies = array("carrot", "spinach", "broccoli");
echo "<b>Isi array Lvegies:</b><br>";

print_r($Lvegies);

echo "<br><br><b>Daftar sayuran:</b><br>";
foreach ($Lvegies as $sayur) {
    echo $sayur . "<br>";
}
?>
