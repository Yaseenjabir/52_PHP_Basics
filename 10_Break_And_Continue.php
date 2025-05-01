<?php

// Use continue above the code you do not to be executed

for($i=0; $i < 10;$i++ ){
  if($i ==3 || $i == 7){
    continue;
  }

  echo $i, "<br />";
}

// Use break when you want to break the remaining iteration of loop

for($i = 0; $i < 10; $i++){
  echo "Hello world this is me <br />";
  if($i == 5){
    break;
  }
}

?>