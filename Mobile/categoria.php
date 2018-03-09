    <?php
        include ('inc/incHead.php');
        include ('inc/incMenu.php');
        include ('inc/incCabecalho.php');
        
        $id = base64_decode($_GET['id']);
        
        include 'buscaCategoria.php';
         
        $linha = buscarCategoriaEspecifica($id);
        
        ?>
            <div class="back"></div>
            <p id="catTitle"><?php echo $linha['titulo'];?></p>
    <?php
        
        include 'buscaPost.php';
        $sql = buscarPostCategoria($id);
        
        $teste = mysqli_num_rows($sql);
        
        $cont = 0;
        while ($linha = mysqli_fetch_array($sql)){    

            if($cont == 0){
                
     ?>
                <div id="catArmacao">
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']);?>"><div id="leftBox"><img src="http://i.imgur.com/<?php echo $linha['imagem'];?>">
                            <h4 id="TituloLeftBig"><?php echo $linha['titulo'];?></h4></div></a>
    <?php                
            }else if($cont == 1) {
    ?>
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']);?>"><div id="topRightBox"><img src="http://i.imgur.com/<?php echo $linha['imagem'];?>">
                        <h4 id="TituloRight"><?php echo $linha['titulo'];?></h4></div></a>
   <?php
                            
           }else if($cont == 2){
    ?>
                    <a href="Postagens?id=<?php echo base64_encode($linha['id']);?>"><div id="bottonRightBox"><img src="http://i.imgur.com/<?php echo $linha['imagem'];?>">
                        <h4 id="TituloLeft"><?php echo $linha['titulo'];?></h4></div></a>
    <?php                
           }else if($cont == 3){
    ?>        
                 <a href="Postagens?id=<?php echo base64_encode($linha['id']);?>"><div id="bottonFullBox"><img src="http://i.imgur.com/<?php echo $linha['imagem'];?>">
                     <h4 id="TituloBotton"><?php echo $linha['titulo'];?></h4></div></a>
            
    <?php
           }
           
           $cont ++;
           
    if($cont == 4 || $cont == $teste){
        
         ?>        
                 </div>
            
    <?php
    
        $teste = $teste - 4;
        $cont = 0;
    }
}
          include ('inc/incRodape.php');