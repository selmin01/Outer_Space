<?php
session_start();

include "../bancoOuterSpace/banco.php";


$resposta = $_POST["resp"];

echo $resposta;

onConexao();

$arrayResposta = selecionar("SELECT descricaoAlternativa, opcaoCorreta FROM alternativa  ");

offConexao();

?>