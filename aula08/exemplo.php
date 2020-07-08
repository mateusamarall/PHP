<?php

$MinhaIdade  = 25;
$idadeCrianca = 12;

$idadeMaior = 18;

$idadeMelhor = 65;

$verdadeiro = true;
if($MinhaIdade<$idadeCrianca){
    echo "é criança";
}
else if($MinhaIdade < $idadeMaior){
    echo "Adolescente";
}
else if($MinhaIdade < $idadeMelhor){
    echo "adulto";
}
else{
    echo "idoso";
}

echo "<br/>";


echo($MinhaIdade < $idadeMaior)?"Menor de idade" : "maior de idade";
?>