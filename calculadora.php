<?php

$Val1 = 6;
$Val2 = 2;
$Opr = "^";
$Result = 0;


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

echo "O resultado é ". $Result;

if ($Result%2==0) {
    echo " (Número par)";
}
else {
    echo " (Número ímpar)";
}
 
