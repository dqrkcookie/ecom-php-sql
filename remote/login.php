<?php

include('../config/conn.php');
session_start();

$user = isset($_POST['user']) ? $conn->real_escape_string($_POST['user']) : '';
$passkey = isset($_POST['pass']) ? $conn->real_escape_string($_POST['pass']) : '';

$sql = "SELECT * from brylle_users where username = '$user'";

$result = $conn->query($sql);

$data = $result->fetch_array();

if(password_verify($passkey, $data['passkey'])){
  header("Location: ../src/pages/home.php");
  $_SESSION['username'] = $user;
}

$conn->close();

?>