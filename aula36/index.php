<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Mateus Amaral");
$cad->setEmail("mateus.amaral018@gmail.com");
$cad->setSenha("123");

$cad->registrarVenda();
?>