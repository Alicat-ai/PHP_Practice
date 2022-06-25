<?php
$a = 11;
$square = $a**2;
//echo $square;

function square($a){
    $square = $a**2;
    return $square;
}
echo square($a);