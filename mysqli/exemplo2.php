<?php

try {
    $connection = new mysqli("localhost","root", "password","dbphp7");
} catch (Throwable $t) {
    echo "Error: " . $t->getMessage(). PHP_EOL;
}


$result = $connection->query("SELECT * FROM tb_usuarios ORDER BY deslogin");


$data = array();


while ($row = $result->fetch_assoc()) {

    array_push($data, $row);


}

echo json_encode($data);
?>