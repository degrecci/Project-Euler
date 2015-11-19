<?php

$resultado = 1;
$fatorial = 100;

for($i = 2; $i <= $fatorial; $i++){

    $resultado=bcmul($resultado, $i);
}

echo array_sum(str_split($resultado));


?>
