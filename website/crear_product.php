<?php

require_once('./database.php'); // informacion de la conexion a la base de datos ($conn);

$fields = $_POST; // capturo todos los datos que vienen por POST del formulario

/* Consulta SQL para crear un nuevo producto */
$query = "INSERT INTO products (name, price) VALUES ('{$fields['name']}', {$fields['price']});";

/* Ejecucion de la consulta SQL */
$result = mysqli_query($conn, $query);

/* Cerrando la conexion a la base de datos */
$conn->close();

/* Redireccionamiento de la pagina segun resultado */
if($result){
    header("Location: products.php", true, 301); // listado de productos
}else{
    header("Location: create.php", true, 301); // formulario para crear producto
}