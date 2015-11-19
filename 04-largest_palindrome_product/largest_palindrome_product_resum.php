<?php
$x1=100;
$x2=100;
while ($x1 < 999) {
  $result = $x1 * $x2;
  $x1++;
  while ($x2 <= 999)
  {
    $result = $x1 * $x2;
    $x2++;
    if($result == strrev($result))
    {
      $r[] = $result;
    }
  }
$x2 = 100;
}
echo "Largest Palindrome Product: <b>". max($r); # Execution time 40.994345 s
?>
