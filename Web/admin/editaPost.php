<?php
    include 'inc/incConeccaoTop.php';
    include 'inc/incCabecalhoIndex.php';
    $id = (int)  base64_decode($_GET['id']);
    
    include 'buscaPost.php';

    $linha = buscarPostEspecifico($id);
    header ('Content-type: text/html; charset=UTF-8');

?>
<link rel="stylesheet" href="estiloAdmin.css" type="text/css" />
<center>
<div id="addBox">
        <p id="admMenu"></p>

<form name="EditarPost" action="editaPost2.php?id=<?php echo base64_encode($linha['id']);?>" method="post" enctype="multipart/form-data">
        
    <p>
        <label>Título: </label>
        <input type="text" name="titulo"  value="<?php echo $linha['titulo'];?>">
    </p>
     <p>
        <label>Autor: </label>
        <input type="text" name="autor"  value="<?php echo $linha['autor'];?>">
    </p>
        <p>
        <label>Imagem: </label>
        <input type="text" name="imagem" value="<?php echo $linha['imagem'];?>">
    </p>
    <p>
        <label>Video: </label>
        <input type="text" name="video" value="<?php echo $linha['video'];?>">
    </p>
    <p>
        <label>Conteudo: </label>
        <br>
        
        <textarea name="teste" id="TextAreaPost" cols="50" rows="15">  <?php echo $linha['conteudo']; ?>  </textarea>
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

    <input class="btnCad" type="submit" value="Salvar Alterações">
    
</form>
</div>
</center>
