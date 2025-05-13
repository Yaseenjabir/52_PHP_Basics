<?php
// echo "<pre>";
// var_dump($_REQUEST);
// echo "<pre>";

$username = $_REQUEST["username"]; // access username
$password = $_REQUEST["password"]; // access password
foreach($_REQUEST as $key => $value){
  echo $key." : ".$value. "<br />";
}

?>