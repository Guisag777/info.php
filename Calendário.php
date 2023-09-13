<?php 

$dataSTR = "32/04/2007";
$data = explode("/", $dataSTR);
$dia= (int)$data[0];
$mes= (int)$data[1];
$ano= (int)$data[2]; 

echo "Data selecionada: ". $dataSTR. "<br>";

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

$Mes30dias = [4, 6 ,9 ,11];
$Mes31dias = [1, 3, 5, 7, 8, 10, 12];


function Validation($ano, $mes, $dia, $Mes30dias, $Mes31dias) {

    if (in_array($mes, $Mes30dias) && $dia > 30) {
        $dia = 1;
        $mes += 1;
    }
    
    if (in_array($mes, $Mes31dias) && $dia > 31) {
        $dia = 1;
        $mes += 1;
    } 

    if ($mes == 2 && $dia >= 28) {
        $dia = 28;

        if (LeapYear($ano)) {
            $dia = 29;
        }
    }

    if (count($ano)==4 && count($mes)==2 && count($dia)==2) {
        return "";
    }
    else { 
        return " DATA INVÁLIDA (Erro de sintaxe) <br>";
    }
}

echo Validation($ano, $mes, $dia, $Mes30dias, $Mes31dias);
echo LeapYear($ano);
