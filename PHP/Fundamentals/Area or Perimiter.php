<?php
function areaOrPerimeter (int $l, int $w){
  if ($l === $w){
    return $l * $w;
  }else{
    return $l * 2 + $w *2;
  }
}