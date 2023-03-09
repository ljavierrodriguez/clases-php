<?php

require_once('./database.php');

/* Variable si uso el buscador */
$search = "";

/* Si hay informacion para buscar capturamos los datos */
if(isset($_GET['search'])){
    $search = $_GET['search'];
}

/* Creamos el filtro a buscar dentro de productos */
$where = "";
/* Si hay algo que buscar indicamos la condicion WHERE del SQL */
if($search !== ""){
    $where = "WHERE name LIKE '%{$search}%'";
} 

/* Listamos todos los productos si $where esta vacio sino filtra por esa condicion */
$query = "SELECT * FROM products {$where};";

/* Ejecutamos la consulta SQL */
$results = mysqli_query($conn, $query);

/* Buscamos los resultados */
$products = mysqli_fetch_all($results); // $products son todos los productos encontrados, variable que usamos en la pagina de productos

/* Cerramos la conexion a la base de datos */
$conn->close();