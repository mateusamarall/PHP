<?php

try {
    $connection = new mysqli("localhost","root", "password","dbphp7");
} catch (Throwable $t) {
    echo "Error: " . $t->getMessage(). PHP_EOL;
}


$stmt = $connection->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?,?)");

$login = "user";

$pass = "12345";


$stmt -> bind_param("ss",$login,$pass);

$stmt->execute();

$login = "user2";

$pass = "123456";

$stmt -> execute();
?>