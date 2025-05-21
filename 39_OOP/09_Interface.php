<?php

interface Car{
  // The interface cannot have properties
  function makeEngine();
  function makeGearBox();
}

class Honda implements Car {
  // No need of "Abstract" keyword with functions 
  function makeEngine(){
    echo "The engine has been made";
  }

  function makeGearBox(){
    echo "The gear box is ready";
  }
}

$car1 = new Honda();
$car1->makeEngine();
echo "<br />";
$car1->makeGearBox();

?>