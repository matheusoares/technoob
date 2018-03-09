<?php

header ('Content-type: text/html; charset=UTF-8');

include './config/security.php';

$id     = (int) base64_decode($_GET['id']);
$titulo   = XSS($_POST['titulo']);
$autor  = XSS($_POST['autor']);
$imagem  = XSS($_POST['imagem']);
$video  = XSS($_POST['video']);
$postagem = XSS ($_POST['teste']);
$categoria = $_POST['selCategoria'];

if(empty($titulo)||empty($autor)||empty($postagem) ){
    
    echo '<script>'
       . '  alert("Por Favor, preencha todos os campos.");'
       . '  history.go(-1);'     
       . '</script>';
    
} else {
    
    include 'TO/PostTO.php';
    include 'DAL/PostDAL.php';
    
    $objTO = new PostTO();
    $objTO->setId($id);
    $objTO->setTitulo($titulo);
    $objTO->setAutor($autor);
    $objTO->setPostagem($postagem);
    $objTO->setCategoriaId($categoria);
    $objTO->setImagem($imagem);
    $objTO->setVideo($video);
    
    $objDAL = new PostDAL();
   
    
    if($objDAL->editarPost($objTO)){
        
        echo "<script>"
        . "  alert('Edição realizada com sucesso.');"
        . "  location.href = 'Inicio';"
        . "</script>";
        
    } else {
        
        echo "<script>"
        . "  alert('Erro ao editar. Contate o administrador do sistema.');"
        . "  history.go(-1);"
        . "</script>";
        
    }
}