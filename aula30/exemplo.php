<?php

class Pessoa{

    public $nome = "Mateus";
    
    protected $idade = 19;

    private $senha = "123456";


    public function verDados(){
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }

}

$objeto = new Pessoa();

//echo $objeto->nome;

$objeto->verDados();


?>