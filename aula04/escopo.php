<?php

$nome="Glaucio";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    global $nome;
    echo $nome." Agora no teste2";
}

teste();
teste2();
?>