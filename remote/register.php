<?php

include('../config/conn.php');

$user = isset($_POST['user']) ? $conn->real_escape_string($_POST['user']) : '';
$passkey = isset($_POST['pass']) ? $conn->real_escape_string(password_hash($_POST['pass'], PASSWORD_DEFAULT)) : '';
$confirm_passkey = isset($_POST['confirm_pass']) ? $conn->real_escape_string($_POST['confirm_pass']) : '';


$sql = "INSERT INTO brylle_users(username, passkey, confirm_passkey)VALUES('$user', '$passkey', '$confirm_passkey')";


if(isset($_POST['register'])){
  $insert = $conn->query($sql);
  header("Location: ../src/index.php");
}

$conn->close();

?>