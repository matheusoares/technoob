<?php
    include 'inc/incConeccaoTop.php';
    include 'inc/incCabecalhoIndex.php';
    header ('Content-type: text/html; charset=UTF-8');
?>
<link rel="stylesheet" href="estiloAdmin.css" type="text/css" />
<center>
<div id="admBox">
    <p id="admMenu"><h2> Sistema de gerenciamento de Postagens</h2></p>
        <p id="ultPost"> Últimas Postagens Adicionadas:</p>
        <br>
        <hr>

<?php

                include 'buscaPost.php';
                
                $sql = buscaTodosPosts();
                
                while($linha = mysqli_fetch_array($sql)){
?>           
                    
        <h1 id="ultPostTitle"><?php echo $linha['titulo'];?></h1>
        <p id="ultPostInf">Criada por <strong><?php echo $linha['autor'];?></strong>  | em  <strong><?php echo date('d/m/Y', strtotime( $linha['data'] ));?></strong>  | Visitas <strong><?php echo $linha['visitas'];?> | <strong><?php echo $linha['CATEGORIA_titulo'];?></strong> </p> 

                
        <a href="editaPost.php?id=<?php echo base64_encode($linha['id']); ?>" title="Editar" id="editarPost">Editar |</a>
        <a href="deletaPost.php?id=<?php echo base64_encode($linha['id']) ?>" title="Excluir" id="excluirPost"> Excluir </a>
        <?php 
                if($linha['status']){
                    echo '<a href="desativaPost.php?id=' . base64_encode($linha['id']) . '" id="ativaPost">| Desativar</a>' ;
                }else {
                    echo '<a href="ativaPost.php?id=' . base64_encode($linha['id']) . '" id="ativaPost">| Ativar</a>' ;
                }
        ?>
                <br>
                <br>
                <hr>
                
               
             
<?php } ?>

</div>
</center>
<?php
    include 'inc/incRodape.php';
?>