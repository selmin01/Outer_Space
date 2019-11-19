<?php
session_start();
$resposta = isset($_POST["txtResposta"]);

include "../bancoOuterSpace/banco.php";

onConexao();

$arrayResposta = selecionar("SELECT descricaoAlternativa, opcaoCorreta FROM alternativa  ");

print_r ($arrayResposta);
offConexao();

//if($resposta == $arrayResposta["des"]){

//}

?>