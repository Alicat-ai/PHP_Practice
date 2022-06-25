<?php
//exercise 1
$x = 5;
$y = 9;
$xy = $x + $y;
$average = $xy / 2;
//echo $average;
echo "<br>";


//exercise 2

$cm = 2.54;
$dm = 30;
$convert = $cm * $dm;
//echo $convert;
echo "<br>";

//exercise 3

$cm = 30;
$dm = 2.54;
$convert = $cm / $dm;
//echo $convert;
echo "<br>";

//exercise 4

$f = 33.8;
$c = ((5/9)*($f-32));
//echo $c;

//exercise 5
$c = 33.8;
$f = (($c * 9/5) + 32);
//echo $f;

//exercise 6

$R = 3;
$r = 2;
$pi = 3.14159;
$s = $pi * ( $R**2 - $r**2 );

//echo $s;


//exercise 7
$a = 10;
$square = $a**2;
//echo $square;

//exercise 8
$a = 10;
$b = 8;
$square = (($a*$b)/2);
//echo $square;

//exercise 9
$a = 10;
$h = 8;
$square = (($a*$h)/2);
//echo $square;

//exercise 10
$a = 10;
$b = 7;
$h = 9;
$square = ((($a + $b)/2) * $h);
//echo $square;

//exercise 11
$a = 6;
$square = (($a**2 * sqrt(3))/4);
//echo $square;

//exercise12
$pi = 3.14;
$r = 4;
$h = 7;
$square = ((2 * $pi * $r) * ($h + $r));
//echo $square;

//exercise13
$pi = 3.14;
$h = 3;
$R = 4;
$r = 2;
$square = (($pi * $h) * ($R**2 - $r**2));
echo $square;
