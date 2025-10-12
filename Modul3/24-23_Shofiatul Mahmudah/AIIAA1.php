<?php
$height = array(
    "Andy"=>"176", 
    "Barry"=>"165", 
    "Charlie"=>"170",
    "David"=>"172",
    "Edward"=>"180",
    "Frank"=>"168",
    "George"=>"175",
    "Henry"=>"178"
);

foreach($height as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>
