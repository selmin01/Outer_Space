<?php
session_start();
include "../bancoOuterSpace/banco.php";

$nick = $_POST["nick"];

onConexao();

$resultado = selecionar("SELECT * FROM usuario WHERE nick = '$nick'");

offConexao();

if(empty($resultado)) {
    $_SESSION["post"] = $_POST;
    header("Location: cadastraUsuario.php");
}else {
    //header("Location: ../acao/erros/erro_cadastro.php?msg=1");
    header("Location: ../paginas/cadastro.php?msg=1");
}
?>