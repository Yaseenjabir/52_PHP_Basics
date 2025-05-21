<?php
include_once("./config.php");

$getData = $connection->prepare("SELECT * FROM customers");
$getData->execute();
$data = $getData->fetchAll();

echo "<pre>";
print_r($data);
echo "<pre>";

?>