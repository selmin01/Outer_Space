<?php
session_start();

include "../bancoOuterSpace/banco.php";

$resposta = $_POST["resp"];

onConexao();

$arrayResposta = selecionar("SELECT descricaoAlternativa, opcaoCorreta FROM alternativa WHERE descricaoAlternativa = '$resposta'");

offConexao();

if($arrayResposta[0]["opcaoCorreta"] == 1) {
    echo "Você Acertou!";
    //header("Location: ../paginas/jogo.php?msg=1");
} else {
    echo "Você Errou!";
    //header("Location: ../paginas/jogo.php?msg=0");
}

?>