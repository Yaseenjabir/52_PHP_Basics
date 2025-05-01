<?php

for($i=0;$i< 10;$i++){
  echo $i, "<br />";
  if($i == 5){
    goto myStatement;
  }
}

echo "This is statement 10";
echo "This is statement 11";
echo "This is statement 12";
echo "This is statement 13";
echo "This is statement 14";
echo "This is statement 15";

myStatement:
echo "This is the statment goto will jump to";

?>