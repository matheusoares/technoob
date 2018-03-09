<!DOCTYPE html>
<html>
    <head>
        <title>TechNooB</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../estiloAdmin.css" type="text/css" />
    </head>
    <body>
        <div class="top">
            <div class="cabecalho">
                <a href="../index.php"><input class="logo" type="image" src="../imagem/logo.png" value="Logo" /></a>
                <a href="https://www.facebook.com/realTechNoob"><input class="iconFace" type="image" src="../imagem/iconFace.png" value="Facebook" /></a>
                <a href="https://www.twitter.com/"><input class="iconTwitter" type="image" src="../imagem/iconTwitter.png" value="Twitter" /></a>
                <a href="https://www.youtube.com/"><input class="iconYoutube" type="image" src="../imagem/iconYoutube.png" value="Youtube" /></a>
                <form name="pesquisa" action="buscaResult.php" method="post">
                <input class="searchText" type="text" name="palavra" id="searchInput">
                <input class="iconPesquisar" type="image" name="btnbusca" src="imagem/iconPesquisar.png" value="submit" required="required">
                </form>
            </div>

            <nav id="menu">
                <ul>
                    <li><a href="index.php" title="Index" id="indexAdmPost"> Bem Vindo <?php echo base64_decode($_SESSION['login']); ?> !</a></li>
                    
                    <li><a href="addpost.php" title="Adicionar" id="addPost">Adicionar Postagem</a></li>
                    <li><a href="logout.php" id="sair">Desconectar</a></li>
                </ul>
            </nav>
        </div>