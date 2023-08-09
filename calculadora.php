<?php

$Val1 = 2;
$Val2 = 10;
$Opr = "Tab";
$Result = 0;

//Operadores básicos
if ($Opr=="+") {
    $Result=$Val1+$Val2;
    echo " O resultado é ". $Result;
}
else if ($Opr=="-") {
    $Result=$Val1-$Val2;
    echo " O resultado é ". $Result;
}
else if ($Opr=="/") {
    $Result=$Val1/$Val2;
    echo " O resultado é ". $Result;
}
else if ($Opr=="*") {
    $Result=$Val1*$Val2;
    echo " O resultado é ". $Result;
}
else if ($Opr=="^") {
    $Result=pow($Val1, $Val2);
    echo " O resultado é ". $Result;
}

//Percentual
//Desconto=percentual de desconto
//Result=valor a ser pago
if ($Opr == "perc") {
    $Desconto = ($Val1 * $Val2) / 100;
    $Result= $Val1 - $Desconto;
    echo " O resultado é ". $Result;
}


//Acrescimo=percentual de valor acrescentado 
//Result=Valor a ser pago
if ($Opr == "perc+") {
    $Acrescimo = ($Val1 * $Val2) / 100;
    $Result= $Val1 + $Acrescimo;
    echo " O resultado é ". $Result;
}

//Média aritimética
if ($Opr == "ma") {
    $Result=($Val1+$Val2)/2; 
    echo " A média aritimética é: ". $Result;
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
 

