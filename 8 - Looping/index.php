<?php

// looping : while, do while, for loop, foreach loop
// 1. while
$x = 0;
while($x <= 5){
    echo "Hello Fiki!";
    $x++;
}

echo "<br/>";

// 2. do while
do{
    echo "Hello Fiki";
    $x++;
}while($x <= 5);

echo "<br/>";

// 3. for loop
for($i=0;$i<=5;$i++){
    echo "Hello Fiki";
}

echo "<br/>";

// 4. for each
$buah = ["Apel", "Mangga", "Jeruk"];

foreach($buah as $value){
    echo "$value <br/>";
}

?>