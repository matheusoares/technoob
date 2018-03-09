<?php

class UsuarioTO{
    
    private $Id;
    private $Login;
    private $Senha;
    
    public function __construct() {}
    
    //SET
    public function setId($id){
        $this->Id = $id;
    }
    
    public function setLogin($login){
        $this->Login = $login;
    }
    
    public function setSenha($senha){
        $this->Senha = $senha;
    }
    
    //GET
    public function getId(){
        return $this->Id;
    }
    
    public function getLogin(){
        return $this->Login;
    }
    
    public function getSenha(){
        return $this->Senha;
    }
}

