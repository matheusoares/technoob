<?php
header ('Content-type: text/html; charset=UTF-8');

    session_start();
    
    if(!isset($_SESSION['login'])){
        header("Location: login.php"); 
    }
?>