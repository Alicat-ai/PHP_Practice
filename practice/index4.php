<?php

$sum = [1,32,4,5,7,];

function sumArray($array) {
    $m = array_search(min($array), $array);
    $a = array_search(max($array), $array);

    foreach ($array as $ar){
        if($key = $m ){
            unset ($array[$key]);
        }
        if ($key = $a){
            unset ($array[$key]);
        }
    }
    return array_sum($array);
}

echo sumArray($sum);
