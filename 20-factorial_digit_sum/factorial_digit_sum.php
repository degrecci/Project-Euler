<?php

$resultado = 1;
$fatorial = 100;

for($i = 2; $i <= $fatorial; $i++){
    $resultado=bcmul($resultado, $i);
    # bcmul - multiplica dois números de precisão arbitrária
}
echo "Soma dos numeros do Fatorial de 100!: <b>" . array_sum(str_split($resultado));
# str_split converte $resultado em um arra e array_sum soma o mesmo.
?>
