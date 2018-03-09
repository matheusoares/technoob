<?php
    include 'inc/incHead.php';
    include 'inc/incMenu.php';
    include 'inc/incCabecalho.php';
    header ('Content-type: text/html; charset=UTF-8');
?>
<div id="addBox">
<h2 class="tituloPaginas">
    Adicionar Usuário 
    |<a href="Inicio">Início</a>
</h2>
<form name="cadUsuario" action="Cadastrar-Usuario2" method="post">
        
    <p>
        <label>Login: </label>
        <input type="text" name="login" required="required">
    </p>
    
    <p>
        <label>Senha: </label>
        <input type="password" name="senha" required="required">
    </p>
    
    <p>
        <label>Confirmar Senha: </label>
        <input type="password" name="confSenha" required="required">
    </p>
    
        <input class="btnCad" type="submit" value="Cadastrar">
    
</form>
</div>
<?php

    include 'inc/incRodape.php';

?>