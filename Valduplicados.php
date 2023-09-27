<?php
/*
//Remover valores duplicados em um array
//Dica:in_array(), $array_merge, isset()
$array = [
    "maçã",
    "banana",
    "uva",
    "melancia",
    "banana",
];

$limpo = [];
$c = count($array);

//Saída esperada: maçã,banana,uva,melancia
    for ($i=0; $i < $c ; $i++) { 
        if(!in_array($array[$i], $limpo)) {
            array_push($limpo , $array[$i]);
            unset($array[$i]);
        }
    }

$countRep = count($array);

echo "Repetições encontradas: $countRep<br>";
echo implode("-",$limpo);
*/

$array = [ 
    "maçã",
    "banana",
    "uva",
    "melancia",
    "banana",
];

$c = count($array);
$limpo = []; 

for ($i=0; $i < $c; $i++) {
    $atual = $array[$i]; 
    if (isset($limpo[$atual])) {
        $limpo[$atual] = 1;
    }
    else {
        $limpo[$atual] += 1;
    }
}

echo implode("-", $limpo);
