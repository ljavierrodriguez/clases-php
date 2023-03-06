<?php
$query = "SELECT * FROM todos;";
$request = mysqli_query($conn, $query);
$tareas = mysqli_fetch_all($request);