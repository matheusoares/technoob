<?php $conn = mysql_connect("mysql.hostinger.com.br", "u468037341_root", "f0eG4P6Xzw"); $db = mysql_select_db("u468037341_tn"); ?>

<?php $busca = "SELECT * FROM tn_posts"; ?>

<?php $total_reg = "2"; // número de registros por página ?>

<?php $pagina=$_GET['pagina']; if (!$pagina) { $pc = "1"; } else { $pc = $pagina; } ?>

<?php $inicio = $pc - 1; $inicio = $inicio * $total_reg; ?>

<?php
$limite = mysql_query("$busca LIMIT $inicio,$total_reg");
$todos = mysql_query("$busca");

$tr = mysql_num_rows($todos); // verifica o número total de registros
$tp = $tr / $total_reg; // verifica o número total de páginas

// vamos criar a visualização
while ($dados = mysql_fetch_array($limite)) { $nome = $dados["titulo"]; echo "Nome: $nome<br>"; }

// agora vamos criar os botões "Anterior e próximo"
$anterior = $pc -1;
$proximo = $pc +1;
if ($pc>1) { echo " <a href='?pagina=$anterior'><- Anterior</a> "; } echo "|";
if ($pc<$tp) { echo " <a href='?pagina=$proximo'>Próxima -></a>"; }
