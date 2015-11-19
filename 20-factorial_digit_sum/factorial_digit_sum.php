<?php
$resultado = 1;

for($i = 2; $i <= 100; $i++){
    $resultado=bcmul($resultado, $i);
    # bcmul - multiplica dois números de precisão arbitrária
}
echo "Soma dos numeros do Fatorial de 100!: <b>" . array_sum(str_split($resultado));
# str_split converte $resultado em um arra e array_sum soma o mesmo.
?>
