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
    $array = str_split($result);
    if($array[0] == $array[5] && $array[1] == $array[4] && $array[2] == $array[3])
    {
      $r[] = $result;
    }
  }
$x2 = 100;
}
rsort($r);
echo $r[0]; # Execution time 40.994345 s
?>
