<?php
$R = 3;
$r = 2;
$pi = 3.14159;
$s = $pi * ( $R**2 - $r**2 );
echo $s;
echo "<br>";

function square($R, $r){
    $pi = 3.14159;
    $s = $pi * ( $R**2 - $r**2 );
    return $s;
}

echo square(4, 1);