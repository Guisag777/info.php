<?php 

$dataSTR = "40/4/2000";
$data = explode("/", $dataSTR);
$dia= (int) $data[0];
$mes= (int) $data[1];
$ano= (int) $data[2]; 

//Mêses com 30 dias ou 31 dias 

//A variável $ano recebe o ano em que deseja
//Se o módulo desse ano por 4 for 0, o ano é bissexto
/*O módulo do ano por 100 não deve ser igual a 0, no entanto
se o módulo do ano por 100 e 400 forem exatos, o ano é bissexto*/

function LeapYear($ano) {

        if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
            return "*".$ano." É um ano bissexto!"."<br>";
        } else {
            return "*".$ano." Não é um ano bissexto"."<br>";
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

    // Meses com 30 dias
    if (($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11) && $dia > 30) {
        $dia = 1;
        $mes += 1;
    }

    // Meses com 31 dias
    if (($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12) && $dia > 31) {
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

}

Validation($ano, $mes, $dia);
$dataSTR = "{$dia}/{$mes}/{$ano}";

echo "Data selecionada {$dataSTR} <br> ". LeapYear($ano);
