
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/estilo.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloLog.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloPost.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloCat.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloAdm.css" type="text/css" />
        <link rel="stylesheet" href="css/estiloPesquisa.css" type="text/css" />
        <script type="text/javascript" src="js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="funcoes/funcao.js"></script>
        <script src="js/bjqs-1.3.js"></script>
        <title>TechNoob</title>
    </head>
    <?php
include 'inc/incMenu.php';
include 'inc/incCabecalho.php';
?>
<div id="admLog">
                    <form name="login" action="login2.php" method="post">

                        <p>
                            <label class="email">Login: </label>
                            <input type="text" name="login" required="required" id="email" >
                        </p>

                        <p>
                            <label class="senha">Senha: </label>
                            <input type="password" type="password" name="senha" required="required" id="senha">
                        </p>

                        <center><input class="btnCad" type="submit" value="Entrar" id="acao"></center>

                    </form>
</div>

               <?php
               
               include 'inc/incRodape.php';