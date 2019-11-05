<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_SESSION["post"];

unset($dados["confir_senha"]);

onConexao();

inserir('usuario', $dados);

$sucesso = mysqli_affected_rows($conexao);

offConexao();

if($sucesso >= 1) {
   header("Location: ../acao/mensagem/msg_cadastro.php?msg=1");
}else {
   header("Location: ../paginas/cadastro.php?msg=2");
}
?>