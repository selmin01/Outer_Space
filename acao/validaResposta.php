<?php
session_start();

$resposta = isset($_POST["resp"]);

include "../bancoOuterSpace/banco.php";

onConexao();

$arrayResposta = selecionar("SELECT descricaoAlternativa, opcaoCorreta FROM alternativa  ");

offConexao();

?>