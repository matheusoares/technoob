<?php
    include 'inc/incHead.php';
    include 'inc/incMenu.php';
    include 'inc/incCabecalho.php';
    header ('Content-type: text/html; charset=UTF-8');
?>
<div id="admBox">
    <h3 id="admTitle">Bem Vindo <?php echo base64_decode($_SESSION['login']); ?> !</h3>
        <p><a href="Logout" id="sair">Sair</a></p>
        <a href="Adicionar-Post" title="Adicionar" id="addPost">Adicionar</a>
        <p id="admMenu"> Sistema de gerenciamento de Postagens:</p>
        <p id="ultPost"> Últimas Postagens:</p>
    

<?php

                include 'buscaPost.php';
                
                $sql = buscaTodosPosts();
                
                while($linha = mysqli_fetch_array($sql)){
?>           
                    
        <h1 id="ultPostTitle"><?php echo $linha['titulo'];?></h1>
        <p id="ultPostInf">por <strong><?php echo $linha['autor'];?></strong>  | em  <strong><?php echo date('d/m/Y', strtotime( $linha['data'] ));?></strong>  | Visitas <strong><?php echo $linha['visitas'];?> | <?php echo $linha['CATEGORIA_titulo']; ?></strong> </p> 

                
        <a href="Editar?id=<?php echo base64_encode($linha['id']); ?>" title="Editar" id="editarPost">Editar |</a>
        <a href="Deletar?id=<?php echo base64_encode($linha['id']) ?>" title="Excluir" id="excluirPost"> Excluir </a>
        <?php 
                if($linha['status']){
                    echo '<a href="Desativar-Post?id=' . base64_encode($linha['id']) . '" id="ativaPost">| Desativar</a>' ;
                }else {
                    echo '<a href="Ativar-Post?id=' . base64_encode($linha['id']) . '" id="ativaPost">| Ativar</a>' ;
                }
        ?>
                <br>
                <br>
                <hr>
                
               
             
<?php } ?>

</div>  

<?php include 'inc/incRodape.php'; ?>