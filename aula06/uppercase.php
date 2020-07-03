<?php
$nome="mateus Amaral";
//deixar em uppercase
echo strtoupper($nome);
echo "<br/>";
//lowercasse
echo strtolower($nome);
echo "<br/>";
//deixar as primeiras letras maiusculas
echo ucwords($nome);
echo "<br/>";
//trocar string
$nome= str_replace("a","4",$nome);
$nome= str_replace("e","3",$nome);
echo$nome;
echo "<br/>";
//retorna a posição da palavra
$frase="a repetição é a mãe da retenção";
$buscar = strpos($frase, "mãe");

var_dump($buscar);

$texto = substr($frase,0,24);
echo $texto;
$palavra ="mãe";
$texto2 = substr($frase, $buscar + strlen($palavra), strlen($frase));

var_dump($texto2);
?>