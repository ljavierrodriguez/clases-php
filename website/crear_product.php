<?php

require_once('./database.php');

$fields = $_POST;

$query = "INSERT INTO products (name, price) VALUES ('{$fields['name']}', {$fields['price']});";

$result = mysqli_query($conn, $query);
//print_r($rows);
$conn->close();

if($result){
    header("Location: products.php", true, 301);
}else{
    header("Location: create.php", true, 301);
}