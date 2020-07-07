<?php

include "./include/include.php"; //aparenta ser import do nodejs

//require
require "./include/include.php";
/*diferenças
require = obriga que o arquivo exista
e esteja funcionando corretamente

include = tenta funcionar mesmo se estiver 
com problema tbm da acesso include_path e include_dinamico

existe tbm o require_once onde apenas chama o arquivo uma 
unica vez
*/

$resultado = somar(10,20);

echo $resultado;
?>