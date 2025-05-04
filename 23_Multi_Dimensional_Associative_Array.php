<?php

$users = [
  ["Name"=>"Yaseen Jabir", "Age" => 20, "City"=> "Mardan"],
  ["Name" => "Muhammad", "Age"=> 20, "City"=>"ISB"]
];

foreach($users as $user){
  foreach($user as $key => $value){
    echo $key.":".$value;
    echo "<br />";
  }
}

?>