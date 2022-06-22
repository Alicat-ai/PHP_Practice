<?php  error_reporting(-1);

// $n = [1,2,3,4,5];

// $reverse = array_reverse($n);

// // for ($i=1; $i < 6; $i++) { 
// //     $reverse[] = $i;
// // }

// var_dump($reverse);

function reverseSeq ($n) {
    $arr = [];

    for ($i=$n; $i >= 1; $i--) { 
        $arr[] += $i;
    }

    return $arr;
};

$d = reverseSeq(20);
var_dump($d);

