<?php

function defaultParameter($a, $b=10){
  return $a + $b;
}

$ans = defaultParameter(10);
echo $ans;


?>