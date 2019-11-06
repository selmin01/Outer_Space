<?php
include "../bancoOuterSpace/banco.php";
onConexao();
$ranking = selecionar("SELECT usuario, ponto FROM ranking ORDER BY ponto Desc Limit 10");
offConexao();
?>
