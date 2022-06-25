<?php
$a = 10;
$b = 7;
$h = 9;
$square = ((($a + $b)/2) * $h);
echo $square;

function square($a, $b, $h){
    $square = ((($a + $b)/2) * $h);
    return $square;
}
echo square($a, $b, $h);