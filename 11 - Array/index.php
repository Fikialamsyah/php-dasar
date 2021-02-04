<?php

// membuat array 
$buah = ["Apel", "Jeruk", "Mangga"];

// akses array
echo $buah[1];

echo "<br/>";

// akses array dengan looping
foreach($buah as $value1){
    echo "$value1 <br/>";
}

// membuat array dengan method array()
$sayur = array("tomat", "brokoli","wortel");

// akses array dengan looping
foreach($sayur as $value2){
    echo "$value2 <br/>";
}

// membuat array associative
$gender = array("fiki"=>"male", "dika"=>"male", "ayu"=>"female");


// akses array associative
echo "Fiki is " . $gender["fiki"];

echo "<br/>";
// akses array dengan looping
foreach($gender as $x => $x_value){
    echo "Key=" .$x ." Value=" . $x_value;
    echo "<br/>";
}

// membuat array multidimensional
$noodle = array(
    array("indomie", 13, 14),
    array("sakura", 15, 19),
    array("sarimi", 17, 18)
);


// akses array multidimensional
echo $noodle[0][0]. "in Stock : " . $noodle[0][1] . " sold : " .$noodle[0][2] . "<br/>";
echo $noodle[1][0]. "in Stock : " . $noodle[1][1] . " sold : " .$noodle[1][2] . "<br/>";
echo $noodle[2][0]. "in Stock : " . $noodle[2][0] . " sold : " .$noodle[2][2] . "<br/>";


// akses array dengan looping
for($row = 0; $row < 3;$row++){
    for($col = 0;$col < 3;$col++){
        echo $noodle[$row][$col] . "<br/>";
    }
}

?>