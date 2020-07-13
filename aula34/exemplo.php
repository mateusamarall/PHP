<?php

abstract class Animal{
    public function emitirSom(){
        return "Som";
    }

    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal{
    public function emitirSom(){
        return "Late";
    }
}
class Gato extends Animal{
    public function emitirSom(){
        return "mia";
    }
}
class Passaro extends Animal{
    public function emitirSom(){
        return "canta";
    }
    public function mover(){
        return "Voa e ". parent::mover();
    }
}
echo "-------------------------------<br/>";
$pluto = new Cachorro();


echo $pluto->emitirSom() . "<br/>";

echo $pluto->mover() . "<br/>";



$garfield = new Gato();

echo "-------------------------------<br/>";
echo $garfield->emitirSom() . "<br/>";
echo $garfield->mover() . "<br/>";


$pintinho = new Passaro();
echo "-------------------------------<br/>";
echo $pintinho->emitirSom(). "<br/>";

echo $pintinho->mover() . "<br/>";
echo "-------------------------------<br/>";
?>