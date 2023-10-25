<?php 

/* Criar um objeto (classe) pessoa, separando
que contemple os 2 tipos de pessoa (Jurídica e Física) 
CNPJ e CPF separando as suas características/individualidades
conforme o tipo (CPF ou CNPJ)
Pessoa jurídica (CNPJ)
Pessoa física (CPF)
EX: propriedades de uma pessoa física (CPF) pai e mãe
    propriedades de uma pessoa jurídica (CNPJ) Empresa, sócios
*/

class Person {
    public $cpf;
    public $name;
    public $birthday;
    
    public function  __construct($input_cpf, $input_name, $input_date){
        $this->cpf = $input_cpf;
        $this->name = $input_name;
        $this->birthday = $input_date;
    }

    public function ValidCPF(){
        if (strlen($this->name)==14) {
            return true;
        }
    }
}

$validation = new Person($cpf, $name, $birthday);
$validation->__construct("000.000.000-00", "Guilherme", "11/04/2007");
//Strlen cpf = 14 bytes
$validation->ValidCPF();


