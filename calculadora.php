<?php

$Val1 = 2;
$Val2 = 10;
$Opr = "MA";

//Operadores básicos

function sum($Val1, $Val2) {
    return ($Val1 + $Val2);
}

function sub($Val1, $Val2) {
    return ($Val1 - $Val2);
}

function division($Val1, $Val2) {
    return ($Val1 / $Val2);
}

function multi($Val1, $Val2) {
    return ($Val1 * $Val2);
}

function poww($Val1, $Val2) {
    return pow($Val1,$Val2);
}

//Percentual
//Desconto=percentual de desconto
//Result=valor a ser pago
function percentDisc($Desconto, $Val1, $Val2) {
    $Desconto = ($Val1 * $Val2) / 100;
    return ($Val1 - $Desconto);
}

//Acrescimo=percentual de valor acrescentado 
//Result=Valor a ser pago
function percentAdd($Acrescimo, $Val1, $Val2) {
    $Acrescimo = ($Val1 * $Val2) / 100;
    return ($Val1 + $Acrescimo);
}

//Média aritimética
function avarage($Val1, $Val2) {
    return ($Val1+$Val2)/2;
}
 
//Operações 

if ($Opr == "+") {
    echo sum($Val1, $Val2);
}
if ($Opr=="-") {
    echo sub($Val1, $Val2);
}
if ($Opr=="/") {
    echo division($Val1, $Val2);
}
if ($Opr=="*") {
    echo multi($Val1, $Val2);
}
if ($Opr=="^") {
    echo poww($Val1, $Val2);
}
if ($Opr == "Discount%") {
    echo percentDisc($Desconto, $Val1, $Val2)."% de desconto";
}
if ($Opr == "Addition%") {
    echo percentAdd($Acrescimo, $Val1, $Val2)."% de acréscimo";
}
if ($Opr == "MA") { 
    echo avarage($Val1, $Val2);
}




//Contador com laços de repetição
//$Val1 é o número até qual você deseja contar
//$c é sempre igual a 0
if ($Opr == "cont") {
    echo "Contando...\n";
    for ($c=0; $c<=$Val1; $c++)
    {
        echo $c."<br>";
    }
}

//Tabuada com laços de repetição
//$Val1 é o número da tabuada
//$c é sempre igual a 0, e será contado até 10 sendo multiplicado pelo $Val1
if ($Opr == "Tab") {
    
    echo "Tabuada do ". $Val1."<br>";

for($c=0; $c <= 10; $c++)
{
    echo $c."X".$Val1."=";
    echo $c * $Val1."<br>";
}
}
 

