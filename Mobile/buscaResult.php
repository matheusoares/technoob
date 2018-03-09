<?php

include 'inc/incHead.php';
include 'inc/incMenu.php';
include 'inc/incCabecalho.php';
 header ('Content-type: text/html; charset=UTF-8');
?>
<h3 id="resultSearch">Resultados da Pesquisa:</h3>
<div id="result">
<?php 

include 'busca.php';
?>

</div>
<?php
include 'inc/incRodape.php';

