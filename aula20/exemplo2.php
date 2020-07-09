<?php
//vc pode falar qual tipo de dado vai ser essa funcao
    //tipo de dado que vai entrar
                                //que vai sair
function soma(float ...$valores):float{

    return array_sum($valores);

}

echo var_dump(soma(2,3));

echo "<br/>";

echo soma (17, 10);

echo "<br/>";

echo soma(1.2,5);

?>