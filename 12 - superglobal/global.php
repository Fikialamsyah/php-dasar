<?php

// superglobal
// 1. global
function addition(){
    $GLOBALS['x'] = 10 + 5;
}

addition();
echo $x;

echo "<br/>";



?>