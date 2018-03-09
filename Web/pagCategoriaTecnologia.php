<?php
include ('inc/incCabecalho.php');
?>

<div class="armacaoCategoriaGames">
    <div class="leftCategoriaGames">
        <?php
        //conexão com o banco de dados
        mysql_connect("mysql.hostinger.com.br", "u468037341_root", "f0eG4P6Xzw");
        mysql_select_db("u468037341_tn");
        //verifica a página atual caso seja informada na URL, senão atribui como 1ª página
        $pagina = (isset($_GET['pagina'])) ? $_GET['pagina'] : 1;

        //seleciona todos os itens da tabela
        $cmd = "SELECT * FROM tn_posts WHERE categoria = 2";
        $tn_posts = mysql_query($cmd);

        //conta o total de itens
        $total = mysql_num_rows($tn_posts);

        //seta a quantidade de itens por página
        $registros = 3;

        //calcula o número de páginas arredondando o resultado para cima
        $numPaginas = ceil($total / $registros);

        //variavel para calcular o início da visualização com base na página atual
        $inicio = ($registros * $pagina) - $registros;

        //seleciona os itens por página
        $cmd = "SELECT * FROM tn_posts WHERE categoria = 2 ORDER BY data DESC limit $inicio,$registros";
        $tn_posts = mysql_query($cmd);
        $total = mysql_num_rows($tn_posts);

        //exibe os produtos selecionados
        while ($produto = mysql_fetch_array($tn_posts)) {
            ?>
            <div class="boxCategoriaGames">
                <h1>
                    <?php
			$str = strip_tags( $produto['titulo'] );
			$len = strlen( $str );
			$max = 55;
			if( $len <= $max )
				echo $str;
			else
				echo substr( $str, 0, $max ) . ' ...';
		?>
                    </h1>
                
                <div class="ilustracaoCategoriaGames"><img src="http://i.imgur.com/<?php echo $produto['imagem']; ?>"></div>
                
                <h3><?php
			$str = strip_tags( $produto['conteudo'] );
			$len = strlen( $str );
			$max = 340;
			if( $len <= $max )
				echo $str;
			else
				echo substr( $str, 0, $max ) . ' ...';
		?>
                    <a href="single.php?id=<?php echo $produto['id']; ?>" title="Leia mais">Leia mais</a></h3>
                
            </div>
        <center>
    <?php
        }
        //exibe a paginação
        for ($i = 1; $i < $numPaginas + 1; $i++) {
            echo "<a href='pagCategoriaGames.php?pagina=$i'>" . $i . "</a> ";
        }
    ?>
        </center>
    </div>
    <div class="rightCategoriaGames">
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
