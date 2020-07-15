<?php

class Users{


    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;


    public function getIdusuario(){
        return $this->idusuario;
    }


    public function getDeslogin(){
        return $this->deslogin;
    }


    public function getDessenha(){
        return $this->dessenha;
    }


    public function getDtcadastro(){
        return $this->dtcadastro;
    }


    public function setIdusuario($value){

        $this->idusuario = $value;

    }


    public function setDeslogin($value){

        $this->deslogin = $value;

    }


    public function setDessenha($value){

        $this->dessenha = $value;

    }


    public function setDtcadastro($value){

        $this->dtcadastro = $value;

    }



    public function loadById($id){

        $sql = new Sql();

        $resultSql = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(

            ":ID"=>$id

        ));

        if(count($resultSql)>0){

            $row = $resultSql[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }

    //retornar lista de usuário
    public static function index(){

        $sql = new Sql();

       return $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");

    }

    public static function search($login){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios where deslogin LIKE :SEARCH ORDER BY deslogin", array(
            ':SEARCH'=> "%".$login."%"
        ));

    }

    //retornar usuário pelo login e password
    public function login($login, $password){

        $sql = new Sql();

        $resultSql = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN  and dessenha = :PASSWORD",
         array(

            ":LOGIN"=>$login,
            ":PASSWORD"=>$password

        ));

        if(count($resultSql)>0){

            $row = $resultSql[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
        else{
            throw new Exception("Login ou senha inválido.");
            
        }

    }


    //retornar um usuário pelo ID
    public function __toString(){
        return json_encode(array(
            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s"),
        ));
    }
}

?>