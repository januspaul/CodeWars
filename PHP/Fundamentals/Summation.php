<?php
function summation($n) {
  $sum = 0;
  do{
    $sum += $n;
    $n--;
  }
  while ($n >= 1);
  return $sum;
}