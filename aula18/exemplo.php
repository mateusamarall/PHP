<?php
//parametros obrigatorios devem ser colocado primeiro como argumneto
function ola($texto = "mundo", $periodo="Bom dia"){

    return "Olá $texto $periodo <br/>";
}
echo ola();
echo ola("mundo","Boa noite");
echo ola("mateus", "Boa tarde");
?>