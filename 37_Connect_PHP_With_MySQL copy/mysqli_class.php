<?php

$host = "localhost";
$username = "root";
$password = null;
$database = "northwind";

$connection = new mysqli($host, $username, $password, $database);

if($connection->connect_error){
  die("Failed to connect to database".$connection->connect_error);
}
else{
  echo "Connected to database";
}

$result = $connection->query("show tables")->fetch_all();
echo "<pre>";
print_r($result);
echo "<pre>";


?>