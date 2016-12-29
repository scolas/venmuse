<?php

$DB_USER = "root";
$DB_PASSWORD = "";
$DB_HOST = "localhost";
$DB_NAME = "venmuse";

$conn = new mysqli($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME);

//check connection_aborted
if ($conn->connect_error){
  die("Connection failed:" . $conn->connect_error);
}

echo "Connected Successfully";
 ?>
