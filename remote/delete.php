<?php

include('../config/conn.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "DELETE FROM brylle_items WHERE id = '$id'";

$result = $conn->query($sql);

if(!$result) {
  echo "failed";
} else {
  header("Location: ../src/pages/home.php?deleted");
}
?>