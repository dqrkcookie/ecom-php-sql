<?php

try{
  $conn = new mysqli('localhost', 'root', '', 'brylle_db', 3307);

  if($conn->connect_error){
    die('Error connecting to database: ' . $conn->connect_error);
  } 
} catch(mysqli_sql_exception){
  die('Server is down');
}

?>