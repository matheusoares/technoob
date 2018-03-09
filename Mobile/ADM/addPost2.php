<?php

include './config/security.php';

$titulo     = XSS($_POST['titulo']);
$autor    = XSS($_POST['autor']);
$imagem      =XSS($_POST['imagem']);
$video      =XSS($_POST['video']);
$categoria  = XSS($_POST['selCategoria']);
$postagem      = XSS($_POST['postagem']);


        include 'TO/PostTO.php';
        include 'DAL/PostDAL.php';

        $objTO = new PostTO();

        $objTO->setTitulo($titulo);
        $objTO->setAutor($autor);
        $objTO->setImagem($imagem);
        $objTO->setVideo($video);
        $objTO->setCategoriaId($categoria);
        $objTO->setPostagem($postagem);

        $objDAL = new PostDAL();

        $idPost = $objDAL->salvarPost($objTO);
        
        if($idPost > 0){

                $titulo     = $_POST['titulo'];
                $autor      = $_POST['autor'];
                $imagem     = $_POST['imagem'];
                $video      = $_POST['video'];
                $categoria  = $_POST['selCategoria'];
                $postagem   = $_POST['postagem'];
                
                echo "<script>"
                . "  alert('Cadastro realizado com sucesso.');"
                . "  location.href = 'Inicio';"
                . "</script>";

            

        } else {

            echo "<script>"
            . "  alert('Erro ao salvar. Contate o administrador do sistema.');/@"
            . "  history.go(-1);"
            . "</script>";

        }
    