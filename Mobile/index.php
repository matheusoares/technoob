        <?php
        include ('inc/incHead.php');
        include ('inc/incMenu.php');
        include ('inc/incCabecalho.php');
        include ('incConecta.php');
        include 'buscaPost.php';
        
        ?>

        <div class="conteudo">
            <div id="slider">                   
                <ul class="bjqs">
                    <?php
                    $sql = buscaSlide();
                    while ($linha = mysqli_fetch_array($sql)){
                   ?>
                    <li><img src="http://i.imgur.com/<?php echo $linha['imagem']; ?>" title="<?php echo $linha['titulo'];?>"></li>
                    <?php }?>
                </ul>
            </div>
            <div class="news">
                <a href="Categoria?id=<?php echo base64_encode($id = 1);?>"><p id="newsTitle">Games</p></a>
                <ul class="noticias">
                   <?php
                    $sql = buscaGames();
                    while ($linha = mysqli_fetch_array($sql)){
                   ?>
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']); ?>"><li><img src="http://i.imgur.com/<?php echo $linha['imagem']; ?>"><h4 id="PostTitulo"><?php echo $linha['titulo'];?></h4></li></a>
                    <?php }?>
                </ul>
                
                
                <a href="Categoria?id=<?php echo base64_encode($id = 3);?>"><p id="newsTitle">Mobile</p></a>
                <ul class="noticias">
                    <?php
                    $sql = buscaMobile();
                    while ($linha = mysqli_fetch_array($sql)){
                   ?>
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']); ?>"><li><img src="http://i.imgur.com/<?php echo $linha['imagem']; ?>"><h4 id="PostTitulo"><?php echo $linha['titulo'];?></h4></li></a>
                    <?php }?>

                </ul>
                
                
                <a href="Categoria?id=<?php echo base64_encode($id = 2);?>"><p id="newsTitle">Tecnologia</p></a>
                <ul class="noticias">
                    <?php
                    $sql = buscaTecnologia();
                    while ($linha = mysqli_fetch_array($sql)){
                   ?>
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']); ?>"><li><img src="http://i.imgur.com/<?php echo $linha['imagem']; ?>"><h4 id="PostTitulo"><?php echo $linha['titulo'];?></h4></li></a>
                    <?php }?>

                </ul>
            </div>
        </div>

       <?php include ('inc/incRodape.php');
