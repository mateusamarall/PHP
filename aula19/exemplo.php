<?php

$a = 10;
//quando usado o & no parametro o valor da variavel é mudado
//quando não é usado o & vai apenas mudar dentro da função (escopo)
function trocaValor(&$a){

    $a +=50;

    return $a;
}

echo trocaValor($a);

echo "<br/>";

echo $a;
?>