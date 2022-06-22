<?php error_reporting(-1);

function numberToString($num)
{
    return (string) $num;
}

$res = numberToString(23423);
var_dump(strval($res));
