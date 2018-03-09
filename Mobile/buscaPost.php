<?php
include 'DAL/PostDAL.php';


function buscaTodosPosts(){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarPost();
    
    return $sql;
}
function buscarPostEspecifico($id){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarPostEspecifico($id);
    $linha = mysqli_fetch_array($sql);
    
    return $linha;
}
function buscarPostCategoria($id){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarPostCategoria($id);
    
    
    return $sql;
}
function buscaGames(){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarGames();
    
    return $sql;
}
function buscaMobile(){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarMobile();
    
    return $sql;
}
function buscaTecnologia(){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarTecnologia();
    
    return $sql;
}
function buscaSlide(){
    $objDAL = new PostDAL();
    $sql = $objDAL->buscarSlider();
    
    return $sql;
}