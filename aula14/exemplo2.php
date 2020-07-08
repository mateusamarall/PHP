<?php

$json = '[
    {
      "nome": "João",
      "idade": 20
    },
    {
      "nome": "Mateus",
      "idade": 19
    }
  ]';

$data = json_decode($json, true);

var_dump($data);

?>