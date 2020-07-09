<?php

$pessoa = array(
    'nome' =>'Mateus' ,
    'idade' => 19

);
//referencia sendo usando no foreach
foreach ($pessoa as &$value) {
    if(gettype($value)==='integer') $value+=10;
    echo $value . "<br/>";
}

print_r($pessoa);

?>