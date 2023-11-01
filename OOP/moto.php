<?php 

class moto {
    public $motor;
    public $escape;
    public $admissao;
    public $valvulas;
    public $cabecote;
    public $embreagem;
    public $freio;
}

class get {
    public function SetMotor($motor) {
        $this -> motor = $motor;
    }

    public function GetMotor($motor) {
        return $this -> motor = $motor;
    }


    public function __toString() {
        return $this;
    }
}
