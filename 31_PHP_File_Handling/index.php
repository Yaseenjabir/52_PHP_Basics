<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

if($_FILES["myfile"]){
  $fileName = $_FILES["myfile"]["name"];
  $uploadPath = "./uploads/".$fileName;
  move_uploaded_file($_FILES["myfile"]["tmp_name"],$uploadPath);
  echo "File upload done";
}

?>