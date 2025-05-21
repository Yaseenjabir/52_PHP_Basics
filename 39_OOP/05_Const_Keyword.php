<?php

class Animal{
  const myconst = "this is const value";

  function getConst(){
    echo "Value is : ".self::myconst;
  }
}

// echo Animal::myconst;
$animal1 = new Animal();
$animal1->getConst();

?>