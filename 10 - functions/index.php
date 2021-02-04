<?php

// membuat fungsi
function sayHello(){
    echo "Hello Fiki";
}

// panggil fungsi
sayHello();

echo "<br/>";

// membuat fungsi dengan paramater
function greeting($name){
    echo "Hello $name";
}

// panggil fungsi
greeting("Fika");

echo "<br/>";


// membuat fungsi dengan nilai kembalian
function multiply($number1, $number2){
    return $number1 * $number2;
}

// panggil fungsi 
echo multiply(5, 5);


?>