<?php

$hostname = "localhost";
$database = "college";
$username = "root";
$password = null;

try{
  $dsn = "mysql:host=$hostname;dbname=$database";
  $pdo = new PDO($dsn,$username, $password);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable exceptions
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetch as associative arrays

  // echo "Connected to database successfully";

}
catch(PDOException $e){
  // Handle connection errors
  echo "Connection failed: " . $e->getMessage();
}

?>