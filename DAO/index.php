<?php

require_once("config.php");


//lista apenas um usuário

// $root = new Users();
// $root->loadById(1);

// echo $root;




//listar usuários

// $index = Users::index();

// echo json_encode($index);


//Carrega uma lsta de usuários buscando pelo login

//  $search = Users::search("m");

 // echo json_encode($search);


//carregando um usuário usando o login e a senha

// $user = new Users();

// $user->login("mateus","123456789");
// echo $user;



//criando usuário
// $aluno = new Users("aluno","senhaAluno");



// $aluno->store();


// echo $aluno;


//Update de usuário

$usuario = new Users();

$usuario->loadById(8);

$usuario->update("professor", "senhaprofessor");

echo $usuario;
 ?>