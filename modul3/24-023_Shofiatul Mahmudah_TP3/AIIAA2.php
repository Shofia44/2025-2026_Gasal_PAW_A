<?php
$Lweight = array("Andy"=>65, "Barry"=>59, "Charlie"=>63);
$keys = array_keys($Lweight);
$arrlength = count($Lweight);
for ($i = 0; $i < $arrlength; $i++) {
    $key = $keys[$i];
    echo "Key=" . $key . ", Value=" . $Lweight[$key];
    echo "<br>";
}
?>
