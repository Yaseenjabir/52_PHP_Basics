<?php

$user = ["name" => "Yaseen jabir", "age" => 20, "city"=> "Mardan"];

// echo $user["name"];

// foreach($user as $key => $value){
//   echo $key.":".$value."<br />";
// }

foreach($user as $key => $data){
  echo $user[$key];
}

?>