<?php

$users = ["Khan", "Syed", "User 1", "User2"];

array_push($users,"User 3");
array_push($users,"User 4");

echo count($users); // 6

array_pop();
array_pop();

echo count($users); //4

?>