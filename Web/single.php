<?php
include ('inc/incCabecalho.php');
header ('Content-type: text/html; charset=UTF-8', true);
?>
<?php

	require_once 'system/config.php';
	require_once 'system/database.php';

	if( !isset( $_GET['id'] ) || empty( $_GET['id'] ) )
		header('Location: index.php');
	else {

		$id 	= DBEscape( strip_tags( trim( $_GET['id'] ) ) );
		$post 	= DBRead( 'posts', "WHERE id = '{$id}' LIMIT 1" );

		if( $post ){

			$post = $post[0];

			$upVisitas = array(
				'visitas' => $post['visitas'] + 1
			);

			DBUpDate( 'posts', $upVisitas, "id = '{$id}'" );

		}

	}

?>

<div class="armacaoPostagem">

    <div class="leftPostagem">
        <?php if( $post ): ?>
        <h1><?php echo $post['titulo']; ?></h1>
        <div class="dataPost"><?php echo date('d/m/Y', strtotime( $post['data'] )) ?></div>
        <div class="autorPost"><?php echo $post['autor']; ?></div>
        
        <div class="ilustracaoPostagem">
        <?php if( empty( $post['video'] ) ) { ?>
            <img src="http://i.imgur.com/<?php echo $post['imagem']; ?>">
        <br>
        <?php }else{ ?>
        <iframe width="672" height="378" src="https://www.youtube.com/embed/<?php echo $post['video']; ?>" frameborder="0" allowfullscreen></iframe>
        <br>
        <?php } ?>
        </div>
        
        <h3><?php echo nl2br( $post['conteudo'] ); ?></h3>
        
	<?php endif; ?>

        <div id="disqus_thread">
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

    </div>

    <div class="rightPostagem">
        <img src="imagem/anuncio.png" alt="Anuncie aqui"/>
        <div class="socialPluginFace">
            <div id="fb-root"></div>
            <script>(function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id))
                        return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-page" data-href="https://www.facebook.com/realTechNoob" data-width="300" data-height="400" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/realTechNoob"><a href="https://www.facebook.com/realTechNoob">TechNoob</a></blockquote></div></div>
        </div>
        <img src="imagem/anuncio.png" alt="Anuncie aqui"/>
    </div>

</div>

<?php
include ('inc/incRodape.php');
