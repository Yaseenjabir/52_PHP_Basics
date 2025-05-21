<?php

class MathOperations {

  private $val = 2;
  public $val2 = 5;

  function sum($a, $b){
    return $a + $b;
  }

  function product($a, $b){
    return $a * $b * $this->val;
  }
}

$math1 = new MathOperations();
echo $math1->sum(5,5);
echo "<br />";
echo $math1->product(2,2);
echo "<br />";
// echo $math1->val; Throw error
echo $math1->val2;

?>

