<?php

class UsuarioDAL{
    
    public function __construct() {}
    
    public function logar($obj){
        
        include 'incConecta.php';
        
        $str = "SELECT * FROM tn_usuario WHERE nome = '" . $obj->getLogin() . "' AND senha = '" . $obj->getSenha() . "'";

        echo $str;
        
        $query = mysqli_query($conecta, $str);
        
        if(mysqli_num_rows($query) > 0){
            return $query;
        } else {
            return false;
        }
        
    }
    
    public function salvarUsuario($obj){
        
        include 'incConecta.php';
        
        $str = "INSERT INTO tn_usuario(LOGIN, SENHA) VALUES('" . $obj->getLogin() . "', '" . $obj->getSenha() . "')";
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return true;
        } else {
            return false;
        }
        
    }
}

