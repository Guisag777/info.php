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

$frutas = ["maçã", "banana", "laranja", "banana", "uva", "maçã", "maçã"];
$n = count($frutas);
$newfrutas = [];
for ($i = 0; $i < $n; $i++) {
    $fruta = $frutas[$i];
    if (!isset($newfrutas[$fruta])) {
        $newfrutas[$fruta] = 1;
    } else {
        $newfrutas[$fruta] += 1;
    }
}

$result = [];

foreach ($newfrutas as $fruta => $num) {
    $result[] = $num . $fruta;
    echo $num . " ". $fruta." ";
}

