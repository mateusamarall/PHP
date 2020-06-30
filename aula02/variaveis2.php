<?php
//Boas práticas com variaveis
$anoNascimento = 2001;

//$nomeCompleto = "Mateus Passos Amaral";

$nome1 ="João";
$sobreNome = "Rangel";

$nomeCompleto = $nome1. " " . $sobreNome; //concatenação

echo $nomeCompleto;
echo "<br/>";
//unset($nome1); apaga da memoria
if(isset($nome1)){ // verificar se existe
    echo $nome1;
}



//$%nome = "guedes"; nao permitido

/*
comentarios de bloco
*/

//$this variavel pré-definida
?>