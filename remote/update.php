<?php

include_once('../config/conn.php');

$name = isset($_GET['name']) ? $_GET['name'] : '';
$details = isset($_GET['details']) ? $_GET['name'] : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';

$sql = "UPDATE brylle_items SET product_name = '$name', product_details = '$details', price = '$price'";

$result = $conn->query($sql);

if($result){
  header("Location: ../src/pages/home.php?updated");
}

$conn->close();
?>