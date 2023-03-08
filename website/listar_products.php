<?php

require_once('./database.php');

$search = "";

if(isset($_GET['search'])){
    $search = $_GET['search'];
}

$where = "";

if($search !== ""){
    $where = "WHERE name LIKE '%{$search}%'";
} 

$query = "SELECT * FROM products {$where};";

$results = mysqli_query($conn, $query);

$rows = mysqli_fetch_all($results);

$conn->close();