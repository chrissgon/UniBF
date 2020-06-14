<?php

class Admin{
    private $db, $usuario, $senha;

    function __construct($db){
        $this->db = $db;
    }

    public function login(){
        $query = "select * from admin where binary usu_adm=:usuario and binary sen_adm=:senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(":usuario", $this->getUsuario());
        $stmt->bindValue(":senha", $this->getSenha());
        try{
            if($stmt->execute()){
                return $stmt->fetch(\PDO::FETCH_ASSOC);
            }
            else{
                return "Erro ao realizar o login!";
            }

        }
        catch(\PDOException $err){
            return $err;
        }
    }

    // GET
    function getUsuario(){
        return $this->usuario;
    }
    function getSenha(){
        return $this->senha;
    }
    // SET
    function setUsuario($usuario){
        $this->usuario = $usuario;
        return $this;
    } 
    function setSenha($senha){
        $this->senha = $senha;
        return $this;
    }
}

?>