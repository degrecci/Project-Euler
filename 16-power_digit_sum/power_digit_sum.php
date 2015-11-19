<?php
$resultado = 1;

for ($i = 1;$i <= 1000; $i++) {
  $resultado = bcmul($resultado , 2);
}
echo "<p>2 ^ 1000: $resultado</p>";
echo "Soma do array: " . array_sum(str_split($resultado));
?>
