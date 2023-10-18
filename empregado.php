<?php

interface Remuneravel {
    public function remuneracao($faturamento);
}

abstract class Servico implements Remuneravel {
    public function remuneracao($faturamento) {

        echo "Está recebendo... {$faturamento}<br>";

    }
}

class Estagiario extends Servico {
    public $faturamento = 500;

    public function estagio() {
        $this->remuneracao($this->faturamento);
        echo "estou recebendo...<br>";
    }
}

class Empregado extends Servico {
    public $faturamento = 1700;

    public function clt() {
        $this->remuneracao($this->faturamento);
    }
}

class Terceirizado extends Servico {
    public $faturamento = 2000;

    public function fornecer() {
        $this->verificarOleoMotor();
        $this->dirigir($this->chave);
    }

    public function verificarOleoMotor() {
    }

}

$carro = new Carro();
$carro->andar();
