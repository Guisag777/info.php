<?php
/* Multiplicar um vetor A por um vetor B e salvar o produto dessa multiplicação em um novo vetor chamado RESULTADO
    ex: $a = [2,3,4];
        $b = [5,6,7];

        $resultado = [10,18,28];
*/ 
$A = [2,3,4,5];
$B = [5,6,7,8];

for ($i = 0; $i < count($A); $i++) {
    $calc = $A[$i] * $B[$i];
    echo "-".$calc;
}
