<?php
echo "<b>Even Fibonacci numbers:</b> ";

$a = 1;
$b = 2;
$x = 0;
$soma = 2;

while ($x <= 4000000){

  echo "$a, ";
  $x = $a + $b;
  $a = $b;
  $b = $x;

    if ($x % 2 == 0) {
      $soma = $soma + $x;
    }
}
    echo "<br><b>Soma de tudo:</b> $soma";
?>
