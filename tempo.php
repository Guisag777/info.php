<?php

//Acrescimo em minutos
$acrescimoMin = 2;

//Tempo de inicio e de termino do jogo
$Hinicial = "16:00:00";
$Hfinal = "17:30:00";


//Tempo inicial

$arrHoraI = explode(":" , $Hinicial);

$HoraI = $arrHoraI[0];
$MinutoI = $arrHoraI[1];
$SegundoI = $arrHoraI[2];

$HSegundosI = $HoraI * 3600;
$MSegundosI = $MinutoI * 60;

$TempoINICIAL = $HSegundosI + $MSegundosI + $SegundoI;

//Tempo final

$arrHoraF = explode(":" , $Hfinal);

$HoraF = $arrHoraF[0];
$MinutoF = $arrHoraF[1];
$SegundoF = $arrHoraF[2];

$HSegundosF = $HoraF * 3600;
$MSegundosF = $MinutoF * 60;

$TempoFINAL = $HSegundosF + $MSegundosF + $SegundoF;

//Tempo total da partida

$Ttotal = $TempoFINAL - $TempoINICIAL;
//Tempo em minutos
$TTemMinutos = ($Ttotal / 60) + $acrescimoMin;

echo $TTemMinutos. " minutos de jogo no total";


