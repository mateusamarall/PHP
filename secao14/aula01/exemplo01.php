<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretório ".$name." criado com suceesso";
}
else{
    echo "Diretório já existente";
}

?>