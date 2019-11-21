<?php
include "../bancoOuterSpace/banco.php";
onConexao();
$ranking = selecionar("SELECT nick, maxPonto FROM usuario WHERE permissao = 0 ORDER BY maxPonto Desc Limit 10");
offConexao();
?>
