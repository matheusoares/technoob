<?php
    include 'inc/incConeccaoTop.php';
    include 'inc/incCabecalhoIndex.php';
    header ('Content-type: text/html; charset=UTF-8');
?>
<link rel="stylesheet" href="estiloAdmin.css" type="text/css" />
<center>
<div id="addBox">
    <p id="admMenu"></p>

<form name="CriarPost" action="addPost2.php" method="post" enctype="multipart/form-data">
        
    <p>
        <label>Título: </label>
        <input type="text" name="titulo" required="required" id="addTitulo">
    </p>
     <p>
        <label>Autor: </label>
        <input type="text" name="autor" required="required" value="<?php echo base64_decode($_SESSION['login']);?>">
    </p>
        <p>
        <label>Imagem: </label>
        <input type="text" name="imagem">
    </p>
    <p>
        <label>Video: </label>
        <input type="text" name="video">
    </p>
    <p>
        <label>Postagem: </label>
        <br>
        <textarea name="postagem" id="TextAreaPost" required="required" cols="50" rows="15"></textarea>
    </p>
    <p>
        <label>Categoria: </label>
        <select name="selCategoria">
            <?php
                include 'buscaCategoria.php';
                
                $sql = buscaTodasCategorias();
                
                while($linha = mysqli_fetch_array($sql)){
                    
            ?>
            
                    <option value="<?php echo $linha['id'] ?>">
                        <?php echo $linha['titulo']; ?>
                    </option>
            
            <?php
                }
            
            ?>
            
        </select>
    </p>

    <input type="submit" class="btnCad" value="Cadastrar">
    
</form>
</div>
</center>