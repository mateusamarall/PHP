<?php

$connection = new PDO("mysql:host=localhost;dbname=dbphp7","root", "password");

$connection->beginTransaction();


$stmt = $connection->prepare("DELETE FROM tb_usuarios WHERE idusuario= ?");


$id=2;

$stmt->execute(array($id));

//$connection->rollback();
$conn->commit();

echo "usuário deletado com sucesso";

?>