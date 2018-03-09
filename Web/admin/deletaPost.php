<?php

header ('Content-type: text/html; charset=UTF-8');

$id     = (int) base64_decode($_GET['id']);

include 'DAL/PostDAL.php';

$objDAL = new PostDAL();



$deleta = $objDAL->deletarPost($id);

if($deleta){
    echo "<script>"
        . "  alert('Post excluído com sucesso.');"
        . "  location.href = 'index.php';"
        . "</script>";
} else {
    echo "<script>"
        . "  alert('Erro ao excluir. Contate o administrador do sistema.');"
        . "  history.go(-1);"
        . "</script>";
}

