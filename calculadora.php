<?php

$Val1 = 2024;
$Val2 = 10;
$Opr = "@";

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

//Descubra se o ano é bissexto
//A variável $Val1 recebe o ano em que deseja
//Se o módulo desse ano por 4 for 0, o ano é bissexto
//O operador @ calcula se o valor do ano é bissexto
function LeapYear($Val1) {
    if ($Val1 % 4 == 0) {
        return $Val1. " é um ano bissexto!";
    }
    else {
        return "O ano não é bissexto";
    }
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
if ($Opr == "@") {
    echo LeapYear($Val1);
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
 

