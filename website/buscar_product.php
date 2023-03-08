<?php

require_once('./database.php');

$id = $_GET['id'];

$query = "SELECT * FROM products WHERE id={$id};";

$results = mysqli_query($conn, $query);

$row = mysqli_fetch_row($results);

$conn->close();