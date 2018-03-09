<?php
    //conexão com o banco de dados
        mysql_connect("mysql.hostinger.com.br", "u468037341_root", "f0eG4P6Xzw");
        mysql_select_db("u468037341_tn");
 
    //verifica a página atual caso seja informada na URL, senão atribui como 1ª página
        $pagina = (isset($_GET['pagina']))? $_GET['pagina'] : 1;
 
    //seleciona todos os itens da tabela
        $cmd = "select * from tn_posts";
        $tn_posts = mysql_query($cmd);
   
    //conta o total de itens
        $total = mysql_num_rows($tn_posts);
   
    //seta a quantidade de itens por página, neste caso, 2 itens
        $registros = 3;
   
    //calcula o número de páginas arredondando o resultado para cima
        $numPaginas = ceil($total/$registros);
   
    //variavel para calcular o início da visualização com base na página atual
        $inicio = ($registros*$pagina)-$registros;
 
    //seleciona os itens por página
        $cmd = "select * from tn_posts ORDER BY data DESC limit $inicio,$registros";
        $tn_posts = mysql_query($cmd);
        $total = mysql_num_rows($tn_posts);
 
    //exibe os produtos selecionados
        while ($produto = mysql_fetch_array($tn_posts)) {
            echo $produto['titulo']."<br>";
            echo $produto['autor']." - ";
            echo $produto['conteudo']." - ";
            echo $produto['data']."<br>";
        }
 
    //exibe a paginação
        for($i = 1; $i < $numPaginas + 1; $i++) {
             echo "<a href='testee.php?pagina=$i'>".$i."</a> ";
        }
?>