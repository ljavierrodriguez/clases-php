<?php

require_once('./database.php'); /* Informacion de Conexion a la base de datos ($conn) */

$id = $_GET['id']; /* ID del producto a buscar */

$query = "SELECT * FROM products WHERE id={$id};"; /* Consulta para buscar el producto indicado */

$results = mysqli_query($conn, $query); /* Ejecucion de la consulta SQL */

$row = mysqli_fetch_row($results); /* Resultado de la busqueda */

$conn->close(); /* Cerramos la conexion a la base de datos */