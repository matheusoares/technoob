<?php

class PostDAL{
    
    public function __construct() {}
    
    
    
    public function buscarPost(){
        include 'ADM/incConecta.php';
        
        $str = "SELECT p.*, c.titulo as CATEGORIA_titulo FROM tn_categorias as c INNER JOIN tn_posts as p ON c.id = p.categoria WHERE p.status = 1 ORDER BY p.data DESC";

        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
    }
    public function buscarGames(){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE categoria = 1 ORDER BY data DESC LIMIT 1  ";
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
   public function buscarMobile(){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE categoria = 3 ORDER BY data DESC LIMIT 1  ";
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
    public function buscarTecnologia(){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE categoria = 2 ORDER BY data DESC LIMIT 1  ";
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
    }
    public function buscarSlider(){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE status = 1 ORDER BY visitas DESC LIMIT 6  ";
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
    }
    public function buscarPostEspecifico($id){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE id = " . $id ;
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
    public function buscarPostCategoria($id){
        
        include 'ADM/incConecta.php';
        
        $str = "SELECT * FROM tn_posts WHERE categoria = " . $id . " AND status = 1 ORDER BY data DESC" ;
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
        
}

