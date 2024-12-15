<?php

include('../config/conn.php');
session_start();

$name = isset($_POST['name']) ? $_POST['name'] : '';
$details = isset($_POST['details']) ? $_POST['details'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';

$sql = "INSERT INTO brylle_items(product_name, product_details, price)VALUES('$name', '$details', '$price')";

$result = $conn->query($sql);


if(isset($_POST['add'])){
  header("Location: ../src/pages/home.php");
}

?>