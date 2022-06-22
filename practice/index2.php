<?php error_reporting(-1);


 $array = [1,3,5,-4,2,];


 $min_arr = min($array);
 echo $min_arr;

 function smallestInteger($array): int
 {
     $min_arr = min($array);
     return $min_arr;
 }

 smallestInteger();

 var_dump(smallestInteger($array));
