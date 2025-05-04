<?php


$users= [ 
  [1,"yaseen jabir",20, "mardan"],
  [2,"Muhammad waqas",20, "mardan"],
];


for($i=0;$i<count($users);$i++){
  for($j=0;$j<count($users[$i]);$j++){
    echo $users[$i][$j];
    echo "<br />";
  }
}

?>