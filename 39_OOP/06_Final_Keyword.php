<?php

/* 
final class Animal {  //if i use final keyword here, no other class can extend it then
  function speak(){
    echo "baoooooooooo!!";
  }
}
class Dog extends Animal{}
$dog1 = new Dog();
$dog1->speak();
*/


class Animal {
   function say(){ //If i use final keyword here then it cannot be overrided
    echo "napppppppppppp!";
  }
};

class Dog extends Animal{
  final function say(){
    echo "Barkkkkkkkkkkkk!!";
  }
};

$dog1 = new Dog();
$dog1->say();
?>