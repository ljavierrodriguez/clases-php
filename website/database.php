<?php
require_once('config.php'); // importando las variables de entorno del programa

// creamos un acceso de conexion a la base de datos
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT) or die("Error al conectar a la base de datos");
