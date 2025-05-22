<?php
$hostname = "localhost";
$username = "root";
$password = null;

try{
  $connection = new PDO("mysql:host=$hostname;dbname=northwind",$username, $password);
  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected Succesfully";
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>