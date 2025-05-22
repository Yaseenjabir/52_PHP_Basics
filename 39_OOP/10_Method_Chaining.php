<?php

class Human{
  function humanName(){
    echo "This is human name. <br />";
    return $this;
  }

  function humanAge(){
    echo "This is human age. <br />";
    return $this;
  }

  function humanEmail(){
    echo "This is human email. <br />";
    return $this;
  }
}

$human1 = new Human();
$human1->humanName()->humanAge()->humanEmail();

?>