<?php
include ('inc/incHead.php');
include ('inc/incMenu.php');
include ('inc/incCabecalho.php');
$id = base64_decode($_GET['id']);
    include 'buscaPost.php';
    
    $linha = buscarPostEspecifico($id);
    if($linha['visitas'] || !$linha['visitas']){
        
        $upVisitas = (int) $linha['visitas'] + 1;
        
        include 'ADM/incConecta.php';
        $str = "UPDATE tn_posts SET  visitas = " . $upVisitas . " WHERE id = " . $id;
        $query = mysqli_query($conecta, $str);


    } 
    
?>
<div id="postArmacao">
    <div id="back"></div>
    <p id="titlePost"><?php echo $linha['titulo'];?></p>
    <h4 style="font-size: 30px; margin: 0 0 0 40px;">por <?php echo $linha['autor'];?>| em <?php echo date('d/m/Y', strtotime( $linha['data'] ));?>| Visitas <?php echo $linha['visitas']; ?> </h4> 

    <div id="midia">
        <?php if($linha['video']){ ?>
        <iframe width="88%" height="595" src="https://www.youtube.com/embed/<?php echo $linha['video']; ?>" frameborder="0" allowfullscreen></iframe>
        <br>
        <?php }else{ ?>
        <img src="http://i.imgur.com/<?php echo $linha['imagem']; ?>">
        <br>
        <?php } ?>    
    </div>
    
    <div id="textPost">
        <p><?php echo $linha['conteudo'];?></p>
    </div>
    <p id="comentarios"><strong>Comentários:</strong></p>
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'technoob1';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var dsq = document.createElement('script');
            dsq.type = 'text/javascript';
            dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES * * */
        var disqus_shortname = 'technoob1';

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function () {
            var s = document.createElement('script');
            s.async = true;
            s.type = 'text/javascript';
            s.src = '//' + disqus_shortname + '.disqus.com/count.js';
            (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
        }());
    </script>

</div>
    <?php   include ('inc/incRodape.php');