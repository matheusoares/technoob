<?php

include 'config/security.php';

$login = XSS($_POST['login']);
$senha = XSS($_POST['senha']);

if(empty($login) || empty($senha)){
    
    echo '<script>'
       . '  alert("Por Favor, preencha todos os campos.");'
       . '  history.go(-1);'     
       . '</script>';
    
} else {
    
    include 'TO/UsuarioTO.php';
    include 'DAL/UsuarioDAL.php';
    
    $objTO = new UsuarioTO();
    $objTO->setLogin($login);
    $objTO->setSenha($senha);
    
    $objDAL = new UsuarioDAL();
    
    if($objDAL->logar($objTO)){
        
        session_start();
        
        $_SESSION['login'] = base64_encode($login);

        header("Location: Inicio");
    } else {
        
        echo "<script>"
        . "  alert('Erro no Login.');"
        . "  history.go(-1);"
        . "</script>";
        
    }
}