<?php

include 'incConecta.php';

    $busca = $_POST['palavra'];
    
    $busca = strip_tags($busca);

    if($busca == "" or $busca == ' '){
        echo '<h1>Não foi digitado nada para ser buscado.</h1>';
    }else{
        $busca_dividida = explode(" ", $busca);
        $quant = count($busca_dividida); 
        $id_mostrado = array("");

    for($i=0;$i<$quant;$i++){
        $pesquisa = $busca_dividida[$i];
        
        $str = "SELECT * FROM tn_posts WHERE titulo LIKE '%$pesquisa%' AND status = 1 ";  
        $query = mysqli_query($conecta, $str);
        $quant_campos = mysqli_num_rows($query);
        if ($quant_campos == 0)
        {
            echo '<h1>Nenhuma Postagem relacionada ao termo <em>"' . $busca . '"</em> </h1>';
        }
        else
        {
            while ($linha = mysqli_fetch_array($query))
            {
                $id = $linha['id'];
                $titulo = $linha['titulo'];
                $conteudo = $linha['conteudo'];
                $data = $linha['data'];

                if (!array_search($id, $id_mostrado))
                {

                    echo '<p id="titulo_busca">' . $titulo . '</p>'
                        . '<p id="data_busca">' . $data . '</p>'
                        . '<p id="conteudo_busca">' . $conteudo . '</p><hr>';

                    array_push($id_mostrado, $id);
                }
            }
        }
     }
}