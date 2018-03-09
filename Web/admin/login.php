<!DOCTYPE html>
<html>
    <head>
        <title>TechNooB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="estiloAdmin.css" type="text/css" />
    </head>
    <body>
<div class="telaLogin">
<center>
    <input class="logoLogin" type="image" src="imagem/TechNooB-Ciano-logo-estendida.png" value="Logo" />
<div id="admLog">
    <form name="login" action="login2.php" method="post">

        <p>
            <label class="loginEmail">Login: </label>
            <input type="text" name="login" required="required" id="email" >
        </p>
        <p>
            <label class="loginSenha">Senha: </label>
            <input type="password" type="password" name="senha" required="required" id="senha">
        </p>
        <br>
        <input class="btnCad" type="submit" value="Entrar" id="acao">

    </form>
</div>
</center>
</div>
    </body>