<?php
$pi = 3.14;
$r = 4;
$h = 7;
$square = ((2 * $pi * $r) * ($h + $r));
//echo $square;

function square($pi, $r, $h){
    $square = ((2 * $pi * $r) * ($h + $r));
    return $square;
}
echo square($pi, $r, $h);