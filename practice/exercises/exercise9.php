<?php
$a = 10;
$h = 8;
$square = (($a*$h)/2);
echo $square;

function square($a, $h){
    $square = (($a*$h)/2);
    return $square;
}
echo square($a, $h);