<?php

$id = base64_decode($_GET['id']);

header ('Content-type: text/html; charset=UTF-8');

include 'incConecta.php';

$str = "UPDATE tn_posts SET status = 1 WHERE id = " . $id;


$query = mysqli_query($conecta, $str);

if($query){
    
    echo '<script> alert("Postagem Ativada Com Sucesso !");'
       . 'location.href = "index.php";</script>';
}else{
    echo '<script> alert("Não é possível realizar esta ação agora, tente novamente mais tarde!");'
       . 'location.href = "index.php";</script>';
}

