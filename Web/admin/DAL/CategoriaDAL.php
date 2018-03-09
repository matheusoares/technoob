<?php

class CategoriaDAL{
    
    public function __construct() {}
 
    
    public function buscarCategoria(){
        include 'incConecta.php';
        
        $str = "SELECT * FROM tn_categorias ORDER BY id";

        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
    }
    
    public function buscarCategoriaEspecifica($id){
        
        include 'incConecta.php';
        
        $str = "SELECT * FROM tn_categoria WHERE ID = " . $id;
        
        $query = mysqli_query($conecta, $str);
        
        if($query){
            return $query;
        } else {
            return false;
        }
        
    }
    
    
}