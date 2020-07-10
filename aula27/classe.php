<?php

class Carro{

    private $modelo;
    private $motor;
    private $ano;

    public function getModelo():string{
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getMotor():float{
        return $this->motor;
    }

    public function setMotor($motor){
        $this->motor =$motor;
    }

    public function getAno():int{
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano=$ano;
    }

    public function exibir(){
        return array(
            'modelo'=> $this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()
        );
    }

}

$ferrari = new Carro();

$ferrari->setModelo("LaFerrari");

$ferrari->setMotor("10.5");

$ferrari->setAno("2021");

print_r($ferrari->exibir());
?>