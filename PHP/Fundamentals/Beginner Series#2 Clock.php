<?php
function past($h, $m, $s){
  return ($h * 3600000 + $m * 60000 + $s * 1000);
}

$newclock = past(0,1,1);

echo $newclock;