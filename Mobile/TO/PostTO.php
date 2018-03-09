<?php

class PostTO{
    
    private $Id;
    private $Titulo;
    private $Autor;
    private $Imagem;
    private $Video;
    private $CategoriaId;
    private $Postagem;
    
    public function __construct() {}
    
    //SET
    public function setId($id){
        $this->Id = $id;
    }
    
    public function setTitulo($titulo){
        $this->Titulo = $titulo;
    }
    
    public function setAutor($autor){
        $this->Autor = $autor;
    }
    
    public function setImagem($imagem){
        $this->Imagem = $imagem;
    }
    
    public function setVideo($video){
        $this->Video = $video;
    }
    
    public function setCategoriaId($categoriaId){
        $this->CategoriaId = $categoriaId;
    }
    public function setPostagem($postagem){
        $this->Postagem = $postagem;
    }
    
    //GET
    
    public function getId(){
        return $this->Id;
    }
    
    public function getTitulo(){
        return $this->Titulo;
    }
    
    public function getAutor(){
        return $this->Autor;
    }
    
    public function getImagem(){
        return $this->Imagem;
    }
    
    public function getVideo(){
        return $this->Video;
    }
    
    public function getCategoriaId(){
        return $this->CategoriaId;
    }
    
    public function getPostagem(){
        return $this->Postagem;
    }
}