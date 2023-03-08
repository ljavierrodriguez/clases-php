<?php

require_once('./database.php');

$fields = $_POST;

$query = "DELETE FROM products WHERE id={$fields['id']};";

$result = mysqli_query($conn, $query);

$conn->close();

if($result){
    header("Location: products.php", true, 301);
}else{
    header("Location: delete.php?id={$fields['id']}", true, 301);
}