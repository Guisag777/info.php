<?php

//Contar a quantidade de frutas repetidas ex: 3 maçã, 2 banana ....

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
}

/*Ultilizar o mesmo exercício e criar uma função que recebe dois parametros (array,string) para ordenar
o array de frutas em ordem crescente ou decrescente*/
//Dica: sort, usort, asort, ksort, rsort......
//Devem ser ultilizados dentro da função

function ordenacao($result, $ordem = "asc") {
    if ($ordem == "asc") {
        $ordem = $result;
        sort($ordem);
        return implode("<br>",$ordem);
    }
    else if ($ordem == "desc") {
        $ordem = $result;
        rsort($ordem);
        return implode("<br>", $ordem);
    }
}

echo ordenacao($result, "desc");

// token
// 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