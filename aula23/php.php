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

 $data_inicio = new DateTime("19-07-2020");
$data_fim = new  DateTime("31-12-2004");
$data_recortada = explode("-","31-12-2004");
    
    $d = $data_recortada[1];
    $m = $data_recortada[0];
    $a = $data_recortada[2];


$dateInterval = $data_inicio->diff($data_fim);

$datatempo = $dateInterval->days;

$resposta =checkdate($d, $m, $a);

if($resposta ===false || $datatempo<5677){
    echo 0;
   
}
else{
    echo 1; 
}
?>