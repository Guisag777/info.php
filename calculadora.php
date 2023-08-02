<?php

$Val1 = 100;
$Val2 = 10;
$Opr = "ma";
$Result = 0;

//Operadores básicos
if ($Opr=="+") {
    $Result=$Val1+$Val2;
}
else if ($Opr=="-") {
    $Result=$Val1-$Val2;
}
else if ($Opr=="/") {
    $Result=$Val1/$Val2;
}
else if ($Opr=="*") {
    $Result=$Val1*$Val2;
}
else if ($Opr=="^") {
    $Result=pow($Val1, $Val2);
}

//Percentual
//Desconto=percentual de desconto
//Result=valor a ser pago

if ($Opr == "perc") {
    $Desconto = ($Val1 * $Val2) / 100;
    $Result= $Val1 - $Desconto;
}


//Acrescimo=percentual de valor acrescentado 
//Result=Valor a ser pago
if ($Opr == "perc+") {
    $Acrescimo = ($Val1 * $Val2) / 100;
    $Result= $Val1 + $Acrescimo;
}

//Média aritimética
if ($Opr == "ma") {
    $Result=($Val1+$Val2)/2; 
}

echo " O resultado é ". $Result;

//Par ou ímpar
if ($Result%2==0) {
    echo " (Número par)";
}
  else {
    echo " (Número ímpar)";
}


 
