<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="username" placeholder="Enter username here">
    <br />
    <br />
    <button type="submit">Submit</button>
  </form>
</body>
</html>


<?php

if(isset($_POST["username"])){
  setcookie("username",$_POST["username"]);
}

if(isset($_COOKIE["username"])){
  echo $_COOKIE["username"];
}



?>