<?php

$Val1 = 6;
$Val2 = 2;
$Opr = "/";
$Result = 0;


if ($Opr=="+") {
    $Result=$Val1+$Val2;
}// O valor é 8
else if ($Opr=="-") {
    $Result=$Val1-$Val2;
}// O valor é 4
else if ($Opr=="/") {
    $Result=$Val1/$Val2;
}// O valor é 3
else {
    $Result=$Val1*$Val2;
}

// O valor é 12

echo "O resultado é ". $Result;
