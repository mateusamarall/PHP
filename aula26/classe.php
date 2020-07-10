<?php

class Pessoa {

    public $nome;//atributo


    public function falar(){//Método

        return "O meu nome é ".$this->nome;

    }

}

$mateus = new Pessoa();

$mateus->nome = "Mateus Amaral";


echo $mateus->falar();
?>