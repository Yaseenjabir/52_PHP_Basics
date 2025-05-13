<?php

$name = "Some text before";

function printGlobalVar(){
  // echo $name; // This will print undefined because we cannot directly access global var inside a function
  global $name;
  echo $name;
}
// printGlobalVar();

function changeGlobalVarVale(){
  global $name;
  $name = "Sometext after change"; // You can change global value inside a function too
  echo $name;
}

changeGlobalVarVale();

?>