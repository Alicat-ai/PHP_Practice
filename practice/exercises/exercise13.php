<?php
$pi = 3.14;
$h = 3;
$R = 4;
$r = 2;
$square = (($pi * $h) * ($R**2 - $r**2));
echo $square;

function square($h, $R, $r){
    $pi = 3.14;
    $square = (($pi * $h) * ($R**2 - $r**2));
    return $square;
}
echo square($h, $R, $r);