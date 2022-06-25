<?php
$a = 6;
$square = (($a**2 * sqrt(3))/4);
echo $square;

function square($a){
    $square = (($a**2 * sqrt(3))/4);
    return $square;
}
echo square($a);