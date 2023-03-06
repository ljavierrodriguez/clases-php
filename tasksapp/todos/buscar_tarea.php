<?php
require_once('./config.php');
require_once('./conexion.php');


$id = $_GET['id'];

$query = "SELECT * FROM todos WHERE id={$id}";

$result = mysqli_query($conn, $query);

$tarea = mysqli_fetch_row($result);

