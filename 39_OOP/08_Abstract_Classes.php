<?php

abstract class MathDeclaration{
  abstract function sum($a, $b);
  abstract function multiply($a, $b);
  abstract function subtract($a, $b);
}

class MathDefinition extends MathDeclaration {
  function sum($a, $b){
    echo $a +$b;
  }

  function multiply($a, $b){
    echo $a * $b;
  }

  function subtract($a, $b){
    echo $a - $b;
  }
}

$math1 = new MathDefinition();
$math1->sum(5,5);
echo "<br />";
$math1->multiply(5,5);
echo "<br />";
$math1->subtract(7,5);

?>