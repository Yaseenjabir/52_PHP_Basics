<?php

class ParentClass{
  public $name ="Yaseen";
  public $age =20;
}

class ChildClass extends ParentClass{
  function about(){
    echo "My name is $this->name and my age is $this->age";
  }
}

$child1 = new ChildClass();
$child1->about();

?>