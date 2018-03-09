
<?php

include 'incConecta.php';

    $busca = $_POST['palavra'];
    
    $busca = strip_tags($busca);

    if($busca == "" or $busca == ' '){
        echo '<h1>Não foi digitado nada para ser buscado.</h1>';
    }else{
        $id_mostrado = array("");

        $str = "SELECT * FROM tn_posts WHERE titulo LIKE '%$busca%' AND status = 1";
           
        $query = mysqli_query($conecta, $str);
        $quant_campos = mysqli_num_rows($query);
        if ($quant_campos === 0)
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
                        . '<p id="conteudo_busca">' . $str = strip_tags($conteudo);
                                                      $len = strlen($conteudo);
                                                      $max = 50;
                                                      if($len <= $max){
                                                            echo $str;
                                                      }else{
                                                      echo substr($str, 0, $max) . ' . . . '?>
<a href="Postagens?id=<?php echo base64_encode($id);?>" title="Leia mais" style="text-decoration: none; color: #009999; font-size:30px; ">Leia mais</a></p>
                                                      <?php ; }
                    array_push($id_mostrado, $id);
                }
            }
        }
     }
    			