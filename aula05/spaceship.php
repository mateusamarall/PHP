<?php

$a = 50;
$b = 35;
/*
comparacao maior menor ou igual se a é maior retorna 1 
se b é maior -1 se igual 0
*/
var_dump($a  <=> $b);

$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e; //se c for nullo retorna d se d é nulo retorna e


//incrimentacao
echo "<br/>";
$numero = 10;
//pre-incrimento

echo "pre incrimento " . ++$numero;
echo "<br/>";
echo "incrimentação " . $numero++;
echo "<br/>";
echo  "incrimentação " . $numero;
echo "<br/>";
//decremento
echo "decremento " . --$numero;


?>