<?php

$sum = [6,32,4,5,7];

function sumArray1(array $array) {
    $min = min($array);
    $max = max($array);

    $minIndex = array_search($min, $array);
    $maxIndex = array_search($max, $array);

    unset($array[$minIndex]);
    unset($array[$maxIndex]);

    return array_sum($array);
}


function sumArray2(array $array) {
    $res = 0;
    $min = min($array);
    $max = max($array);

    for ($i=0; $i < count($array); $i++){
        if ( !($array[$i] == $min || $array[$i] == $max) ) $res += $array[$i];
    }

    return $res;
}

var_dump(sumArray1($sum));
var_dump(sumArray2($sum));