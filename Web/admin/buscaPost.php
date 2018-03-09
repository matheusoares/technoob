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