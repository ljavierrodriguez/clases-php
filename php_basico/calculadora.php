<?php

require_once('functions.php');


$result1 = sumar(10, 10);
$result2 = restar(15, $result1);
$a = sumar($result2, 10);
$b = restar(76, 100);
$c = sumar(23, 1);
$d = sumar(1, 2);

echo $result1. "\n";
echo $result2. "\n";
echo $a. "\n";
echo $b. "\n";
echo $c. "\n";
echo $d. "\n";

echo getColor(1);
echo getColor(4);
echo getColor(3);



echo operacion(10, 5, 'sumar');