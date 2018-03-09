<?php
    header ('Content-type: text/html; charset=UTF-8');

    include 'inc/incHead.php';
    include 'inc/incMenu.php';
    include 'inc/incCabecalho.php';
?>
<div id="addBox">
<h2 class="tituloPaginas">
    Adicionar Postagem 
    |<a href="Inicio">Início</a>
</h2>

<form name="CriarPost" action="ConfirmarPost" method="post" enctype="multipart/form-data">
        
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
        <textarea name="postagem" id="TextAreaPost" required="required"></textarea>
    </p>
    <p>
        <label>Categoria: </label>
        <select name="selCategoria">
            <?php
                include 'buscaCategoria.php';
                
                $sql = buscarCategoria();
                
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

    <center><input type="submit" class="btnCad" value="Cadastrar"></center>
    
</form>
</div>
    <?php include 'inc/incRodape.php';?>