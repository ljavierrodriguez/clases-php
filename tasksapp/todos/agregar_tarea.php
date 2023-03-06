<?php
require_once('./../config.php');
require_once('./../conexion.php');

$query = "INSERT INTO todos (task, done) VALUES('{$_POST["task"]}',{$_POST["done"]} );";
$result = mysqli_query($conn, $query);

if($result){
    header("Location: ../tasks.php", true, 301);
    exit();
} else {
    header("Location: ../addtask.php", true, 301);
    exit();
}