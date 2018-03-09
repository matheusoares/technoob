<?php
include 'DAL/CategoriaDAL.php';


function buscarCategoria(){
    $objDAL = new CategoriaDAL();
    $sql = $objDAL->buscarCategoria();
    
    return $sql;
}
function buscarCategoriaEspecifica($id){
    $objDAL = new CategoriaDAL();
    $sql = $objDAL->buscarCategoriaEspecifica($id);
    $linha = mysqli_fetch_array($sql);
    
    return $linha;
}