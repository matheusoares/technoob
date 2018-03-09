<?php

include 'inc/incCabecalho.php';
 header ('Content-type: text/html; charset=UTF-8');
?>
<center>
    <h2 id="resultSearch">Resultados da Pesquisa:</h2><hr>
<div id="result">
<?php 

include 'busca.php';
?>

</div>
</center>
<?php
include 'inc/incRodape.php';

