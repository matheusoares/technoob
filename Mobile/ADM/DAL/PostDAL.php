<?php

class PostDAL{
    
    public function __construct() {}
    
    
    public function salvarPost($obj){
        
        include 'incConecta.php';
        
        $str = "INSERT INTO "
             . " tn_posts(titulo, autor, conteudo, imagem, video, categoria ) "
             . "VALUES('" . $obj->getTitulo() . "','" . $obj->getAutor() . "','" . $obj->getPostagem() . "','" . $obj->getImagem() . "','" . $obj->getVideo() . "'," . $obj->getCategoriaId() . ")";
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return mysqli_insert_id($conecta);
        } else {
            return false;
        }
        
    }
    public function buscarPost(){
        include 'incConecta.php';
        
        $str = "SELECT p.*, c.titulo as CATEGORIA_titulo FROM tn_categorias as c INNER JOIN tn_posts as p ON c.id = p.categoria ORDER BY p.data DESC";

        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
    }
   
    public function buscarPostEspecifico($id){
        
        include 'incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE id = " . $id;
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
    public function editarPost($obj){
        include 'incConecta.php';
        
        $str = "UPDATE tn_posts SET titulo = '" . $obj->getTitulo() . "', autor = '" . $obj->getAutor() . "', conteudo = '" . $obj->getPostagem() . "', imagem = '" . $obj->getImagem() . "', video = '" . $obj->getVideo() . "', categoria = '" . $obj->getCategoriaId() . "' WHERE id = " . $obj->getId();
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return true;
        } else {
            return false;
        }
    }
    public function deletarPost($id){
        include 'incConecta.php';
        
        $str = "DELETE FROM tn_posts WHERE id = " . $id;
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return true;
        } else {
            return false;
        }
    }
    
}

