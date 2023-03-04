<?php 
require_once('./config.php');


$conexion = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

//print_r($conexion);

// CRUD (Create, Read, Update, Delete)

//$select = "SELECT * FROM contacts WHERE name='Fernando Cortes';";
$select = "SELECT * FROM contacts;"; // CRUD => R
$resultado = mysqli_query($conexion, $select);
$datos = mysqli_fetch_all($resultado);

print_r($datos);


$update = "UPDATE contacts SET phone='+56911112222' WHERE id=1;"; // CRUD => U
$resultado = mysqli_query($conexion, $update);

$delete = "DELETE FROM contacts WHERE id=2;"; // CRUD => D
$resultado = mysqli_query($conexion, $delete);

$insert = "INSERT INTO contacts (name, email, phone) VALUES ('Luis J. Rodriguez O.', 'lrodriguez@gmail.com', '+584129957285');"; // CRUD => C
//$resultado = mysqli_query($conexion, $insert);
//print_r($resultado);