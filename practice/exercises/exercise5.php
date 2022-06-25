<?php
$c = 100;
$f = (($c * 9/5) + 32);
echo $f;


function translate($c){
    $f = (($c * 9/5) + 32);
    return $f;
}
echo translate($c);