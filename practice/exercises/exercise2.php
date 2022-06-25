<?php
$cm = 2.54;
$dm = 30;
$convert = $cm * $dm;
echo $convert;
echo "<br>";



function converting($cm, $dm){
    return $cm * $dm;
}
echo converting($cm, $dm);
