<?php 
//  $data1  = new DateTime("19-07-2020");

// $data_fim = new DateTime("31-12-2004");

//  $dateInterval = $data1->diff($data_fim);

//  $datatempo = $dateInterval->days;

//  if( $datatempo<5677){
//      echo 0;
//  }
//  else{
//       echo 1; 
//  }

$data = date("2020-07-20");
 $data_inicio = new DateTime($data);
$data_fim = new  DateTime("2004-12-31");
$data_recortada = explode("-",$data);
    
    $d = $data_recortada[2];
    $m = $data_recortada[1];
    $a = $data_recortada[0];


    

$dateInterval = $data_inicio->diff($data_fim);

$datatempo = $dateInterval->days;
echo $datatempo;

$resposta =checkdate($m, $d, $a);

if($resposta ===false || $datatempo<5677){
    echo 0;
   
}
else{
    echo 1; 
}

?>