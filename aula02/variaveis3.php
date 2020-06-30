<?php
//string

$nome = "Titi";
$time = "Corinthians";
//number
$ano = 2012;
//ponto flutuante
$salario = 50.000;
//boolean
$bloqueado = false;
//array
$frutas = array("abacaxi","laranja", "manga", "maça"); //aceita numeros em um array de letras

echo $frutas[2];

//objeto
$data = new DateTime();

//var_dump($data);

//tipos especiais

$arquivo = fopen("variaveis.php", "r"); //abrir um arquivo

//var_dump($arquivo);

$nulo = NULL; //AUSENCIA DE VALOR
?>