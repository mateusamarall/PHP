<?php

$connection = new PDO("mysql:host=localhost;dbname=dbphp7","root", "password");

$stmt = $connection->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario= :ID");

$login = "maria";
$password = "123456789";
$id=2;
$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "usuário alterado com sucesso";

?>