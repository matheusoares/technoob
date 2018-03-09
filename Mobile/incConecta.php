

<?php

$servidor       = "mysql.hostinger.com.br";
$usuarioBD      = "u244173742_root";
$senhaBD        = "xz6JC4y48p";
$banco          = "u244173742_tn";

$conecta = mysqli_connect($servidor, $usuarioBD, $senhaBD, $banco) or die(mysqli_errno($conecta));