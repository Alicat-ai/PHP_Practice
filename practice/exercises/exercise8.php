<?php
$a = 10;
$b = 8;
$square = (($a*$b)/2);
echo $square;

function square($a, $b){
    $square = (($a*$b)/2);
    return $square;
}
echo square($a, $b);