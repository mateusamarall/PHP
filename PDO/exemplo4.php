<?php

$connection = new PDO("mysql:host=localhost;dbname=dbphp7","root", "password");

$stmt = $connection->prepare("DELETE FROM tb_usuarios WHERE idusuario= :ID");

$id=5;

$stmt->bindParam(":ID",$id);
$stmt->execute();

echo "usuário deletado com sucesso";

?>