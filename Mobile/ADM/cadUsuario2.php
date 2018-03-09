<?php

header ('Content-type: text/html; charset=UTF-8');

include './config/security.php';

$login      = XSS($_POST['login']);
$senha      = XSS($_POST['senha']);
$confSenha  = XSS($_POST['confSenha']);

if(empty($login) || empty($senha) || empty($confSenha)){
    
    echo '<script>'
       . '  alert("Por Favor, preencha todos os campos.");'
       . '  history.go(-1);'     
       . '</script>';
    
} else {
    
    if($senha != $confSenha){
        echo '<script>'
           . '  alert("As senhas informadas não conferem.");'
           . '  history.go(-1);'     
           . '</script>';
    } else {

        
        
        include 'TO/UsuarioTO.php';
        include 'DAL/UsuarioDAL.php';

        $objTO = new UsuarioTO();
        $objTO->setLogin($login);
        $objTO->setSenha(sha1($senha));

        $objDAL = new UsuarioDAL();

        if($objDAL->salvarUsuario($objTO)){

            echo "<script>"
            . "  alert('Cadastro realizado com sucesso.');"
            . "  location.href = 'Inicio';"
            . "</script>";

        } else {

            echo "<script>"
            . "  alert('Erro ao salvar. Contate o administrador do sistema.');"
            . "  history.go(-1);"
            . "</script>";

        }
    }
}