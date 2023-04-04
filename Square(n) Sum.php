function square_sum($numbers) : int {
  $total = 0;
  foreach($numbers as $number){
    $total += $number * $number ;
  }
  return $total;
}