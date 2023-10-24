<?php

//POO =Programação Orientada a Objetos

/* Exemplo:

class Motorista {
    function dirigir() {
        ###########
    }
}

$motorista = new Motorista();
$motorista->dirigir();

*/ 

class Person {
    //Propriedades da classe
    public $name;
    public $height;
    public $weight;

    public function __construct($namePers, $heightPers , $weightPers){
        $this->name = $namePers;
        $this->height = $heightPers;
        $this->weight = $weightPers;
    }

    public function info(){
        echo "Nome: ". $this->name . "<br>";
        echo "Altura: ". $this->height . "<br>";
        echo "Peso: ". $this->weight . "<br>";
    }
}

$infopers = new Person($name , $height, $weight);
$infopers->__construct("Guilherme", 168 , 57);
$infopers->info();

