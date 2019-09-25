<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["nome"]);
unset($_POST["confir_senha"]);

$nick = $_POST["nick"];

onConexao();

$arrayDados = selecionar("SELECT * FROM usuario WHERE nick = '$nick'");

$id = array_column($arrayDados, 'idUsuario');

unset($_POST["nick"]);

$id = implode("", $id);

alterar('usuario', $_POST, "idUsuario = ". $id);

$sucesso = mysqli_affected_rows($conexao);

offConexao();

if($sucesso >= 1) {
    header("Location: ../paginas/login.php?msg=3");
}else {
    header("Location: ../paginas/esqueciSenha.php?msg=4");
}
?>