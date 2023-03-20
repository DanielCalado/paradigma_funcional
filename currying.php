<?php
function adicionar($a, $b) {
    return $a + $b;
  }
  
  $addFive = function($c) use ($adicionar) {
    return adicionar(5, $c);
  };
  
  echo $addFive(10); 
?>