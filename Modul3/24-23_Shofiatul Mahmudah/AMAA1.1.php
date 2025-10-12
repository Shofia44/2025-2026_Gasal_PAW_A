<?php
$Lstudents = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

array_push($Lstudents,
    array("Daniel", "220404", "0812345670"),
    array("Evelyn", "220405", "0812345671"),
    array("Felix", "220406", "0812345672"),
    array("Grace", "220407", "0812345673"),
    array("Hannah", "220408", "0812345674")
);

$total_rows = count($Lstudents);

for ($row = 0; $row < $total_rows; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>" . $Lstudents[$row][$col] . "</li>";
    }
    echo "</ul>";
}

echo "<b>Jumlah data dalam array Lstudents saat ini: $total_rows</b>";
?>
