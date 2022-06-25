<?php
$x = 15;
$y = 9;
//$xy = $x + $y;
//$average = $xy / 2;
//echo $average;

function sum_average($x, $y){
    $xy = $x + $y;
    return $xy/2;
}
echo sum_average($x, $y);
