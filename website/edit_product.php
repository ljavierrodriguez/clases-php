<?php

require_once('./database.php');

$fields = $_POST;

$query = "UPDATE products SET name='{$fields['name']}', price={$fields['price']} WHERE id={$fields['id']};";

$result = mysqli_query($conn, $query);

$conn->close();

if($result){
    header("Location: products.php", true, 301);
}else{
    header("Location: edit.php?id={$fields['id']}", true, 301);
}