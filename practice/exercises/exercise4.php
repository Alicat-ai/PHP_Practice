<?php
$f = 33.8;
$c = ((5/9)*($f-32));
//echo $c;

function translate($f){
    $c = ((5/9)*($f-32));
    return $c;
}
echo translate($f);