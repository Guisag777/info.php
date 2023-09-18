<?php 

$dataSTR = "40/4/2007";
$data = explode("/", $dataSTR);
$dia= (int) $dataSTR[0];
$mes= (int) $dataSTR[1];
$ano= (int) $dataSTR[2]; 

function M30dias($mes) {
    return in_array($mes, [4, 6, 9, 11]);
}

function M31dias($mes) {
    return in_array($mes, [1, 3, 5, 7, 8, 10, 12]);
}

//A variável $ano recebe o ano em que deseja
//Se o módulo desse ano por 4 for 0, o ano é bissexto
/*O módulo do ano por 100 não deve ser igual a 0, no entanto
se o módulo do ano por 100 e 400 forem exatos, o ano é bissexto*/

function LeapYear($ano) {
    if ($ano % 4 == 0 xor $ano % 400 == 0 and $ano % 100 == 0) {
        return "*".$ano." É um ano bissexto!"."<br>";
    }
    else if ($ano % 100 ==0 xor $ano % 400 != 0) {
        return "*".$ano." Não é um ano bissexto"."<br>";
    }
    else {
        return ".".$ano." Não é um ano bissexto"."<br>";
    }
}

function Validation($ano, $mes, $dia) {

    //Dias
    if ($dia < 1 || $dia > 31) {
        $dia = 1;
    }

    //Meses
    if ($mes < 1 || $mes > 12) {
        $mes = 1;
        $ano += 1;
    }

    //Meses com 30 dias
    if (M30dias($mes) && $dia > 30) {
       $dia = 1;
       $mes += 1;
    }
    
    //Meses com 31 dias
    if (M31dias($mes) && $dia > 31) {
        $dia = 1;
        $mes += 1;
    } 

    //Mes de fevereiro
    if ($mes == 2 && $dia >= 28) {
        $dia = 28;

        if (LeapYear($ano)) {
            $dia = 29;
        }
    }

    //Erro com sintaxe
    if (strlen($ano)==4 && count($mes)==2 && count($dia)==2) {
        return "";
    }
    else { 
        return " DATA INVÁLIDA (Erro de sintaxe) <br>";
    }
}

Validation($ano, $mes, $dia);
$dataSTR = "{$dia}/{$mes}/{$ano}";

echo "Data selecionada {$dataSTR} <br> ". LeapYear($ano);