<?php

$x = 5;
// branching : if else, switch
// if else
if($x > 2){
    echo "x lebih besar dari 2";
}else {
    echo "x lebih kecil dari 2";
}

echo "<br/>";

// if else if else
if($x > 6){
    echo "x lebih besar dari 6";
}else if($x == 5){
    echo "x sama dengan 5";
}else {
    echo "x tidak lebih besar dari 5 dan x tidak sama dengan 5";
}

echo "<br/>";

// switch
switch($x){
    case 1:
        echo "x sama dengan 1";
    case 2:
        echo "x sama dengan 2";
    case 3:
        echo "x sama dengan 3";
    case 4:
        echo "x sama dengan 4";
    case 5:
        echo "x sama dengan 5";
    default:
        echo "x tidak terdefinisi";
}

?>