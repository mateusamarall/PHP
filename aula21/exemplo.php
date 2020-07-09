<?php

$hierarquia = array(
    
     array(
         
        'nome_cargo' =>'CEO',
        'subordinados' => array(
            //Inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor comercial',
                'subordinados'=>array(

                    array(
                    'nome_cargo'=>'Gerente de vendas'
                    )
                )
            ),
            //Termino: Diretor comercial
            array(
                'nome_cargo'=>'Diretor Financeiro',
                'subordinados'=>array(
                    array(
                    'nome_cargo' =>'Gerente contas a pagar',
                    'subordinados' =>array(
                        array(
                            'nome_cargo' =>'Supervisor de Pagamentos'
                        )
                    )
                 )
                ),  
                array(
                    'nome_cargo'=>'Gerente de compras',
                    'subordinados' =>array(
                        array(
                            'nome_cargo'=>'Supervisor de suprimentos'
                        )
                    )
                ),
            )
        )
    )
);

function exibir($cargos){

    $html = '<ul>';

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibir($cargo['subordinados']);
        }

        $html .= "</li>";
    }
    
    $html .= "</ul>";

    return $html;
}
echo exibir($hierarquia);

?>