<?php

// global scope 
$nama = "Fiki";

function sayHello(){
    $nama = "Fika";
    echo "<p>nama saya adalah $nama</p>";
}

// panggil fungsi
sayHello();

echo "<p>nama saya adalah $nama</p>";

?>