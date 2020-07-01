<?php
        //conversão o dado que vem em string para inteiro
$nome =(int)$_GET["a"]; //pegado o dado pelo query selector


//var_dump($nome); //ver tipo da variavel e seu valor

//pegar o ip do usuario
$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

//pegar o nome do arquivo
echo "<br/>";
$nomeArquivo = $_SERVER["SCRIPT_NAME"];

echo $nomeArquivo;
?>