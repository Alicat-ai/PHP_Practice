<?php

$cm = 30;
$dm = 2.54;
$convert = $cm / $dm;
echo $convert;
echo "<br>";

function converting($cm, $dm){
    return $cm / $dm;
}
echo converting($cm, $dm);