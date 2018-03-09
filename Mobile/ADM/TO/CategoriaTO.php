<?php

class CategoriaTO{
    
    private $Id;
    private $Nome;
    private $CategoriaPai;


    public function __construct() {}
    
    //----------------------------------------| MÉTODOS SET | ------
    
    public function setId($id){
        $this->Id = $id;
    }
    
    public function setNome($nome){
        $this->Nome = $nome;
    }

    public function setPai($id){
        $this->CategoriaPai = $id;
    }

    //----------------------------------------| MÉTODOS GET | ------
    
    public function getId(){
        return $this->Id;
    }
    
    public function getNome(){
        return $this->Nome;
    }
    
    public function getCategoriaPai(){
        return $this->CategoriaPai;
    }
}