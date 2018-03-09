<?php

class CategoriaTO{
    
    private $Id;
    private $Nome;


    public function __construct() {}
    
    //----------------------------------------| MÉTODOS SET | ------
    
    public function setId($id){
        $this->Id = $id;
    }
    
    public function setNome($nome){
        $this->Nome = $nome;
    }


    //----------------------------------------| MÉTODOS GET | ------
    
    public function getId(){
        return $this->Id;
    }
    
    public function getNome(){
        return $this->Nome;
    }
}