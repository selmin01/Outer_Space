<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_POST;

$descricaoGrupo = $dados["descricaoGrupo"];

$membro = $dados["usuario_idUsuario"];

onConexao();

$grupo = selecionar("SELECT * FROM grupo WHERE descricaoGrupo = '$descricaoGrupo'");

$usuario = selecionar("SELECT * FROM usuario WHERE nick = '$membro'");

offConexao();

if(($grupo == $descricaoGrupo) || empty($usuario)) {
    header("Location: ../paginas/auxGrupo/criaGrupo.php?msg=1");
}else {
    $_SESSION["post"] = $_POST;
    header("Location: adicionaGrupo.php");
}
?>