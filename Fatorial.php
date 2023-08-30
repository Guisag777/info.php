<?php
/*calcular o fatorial de um numero qualquer
    ex: $numero = 5;
    5! 
*/  

// $Numero = 5;
// $calc =0;

// echo "os antecessores são: ";

// for ($a = 1; $a < $Numero; $a++){
 
//     $calc += $Numero * $a;
// }
// 5*4*3*2*1

$Numero = 6;
$calc =1;
$a = $Numero;

while($a > 1) {
    $calc *= $a;
    $a--;
}


echo "O fatorial de {$Numero} é {$calc}";
