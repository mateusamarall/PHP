<?php

$connection = new PDO("mysql:host=localhost;dbname=dbphp7","root", "password");

$stmt = $connection->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "mateus";
$password = "123456789";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "usuário inserido";

?>