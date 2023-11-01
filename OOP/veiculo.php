<?php

require_once "Carro.php";
require_once "Moto.php";

class Pessoa {

    public function veiculo() {
        $pessoaF = new moto();
        $pessoaF->SetMotor("Motor da moto");
    }
}
