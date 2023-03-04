<?php

// string, number, boolean, array, object, function

$name = "Luis";
$lastname = "Rodriguez";

$age = 40;
$grade = -10;
$mount = 10.40;
$debit = -10.40;

$active = true;
$single = false;

/* $example = [true, [1,2], "Pedro", 10, {name: "Felipe"}, function(){} ] */


$names = ["Hugo", "Paco", "Luis"];

$scores = [10, 12, 39, 8, 2];

echo "$scores[3]";

$students = array (
    (object) array("name" => "Hugo", "materia" => "English"),
    (object) array("name" => "Paco", "materia" => "French")
);

echo "Student 1: " . $students[1]->name;

$birthday = "1981-12-12";

$fecha = date("Y-m-d H:i:s");

echo $fecha;

?>