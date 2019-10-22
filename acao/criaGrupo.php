<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_SESSION["post"];

$grupo = $dados["descricaoGrupo"];

$membro = $dados["usuario_idUsuario"];

$codigo = rand(1, 1000);

onConexao();

$dadosRanking = array("usuario" => $membro, "ponto" => 0);

$idRanking = inserir('rankinggrupo', $dadosRanking);

$dadosGrupo = array("codigo" => $codigo, "rankingGrupo_idRankingGrupo" => $idRanking, "descricaoGrupo" => $dados["descricaoGrupo"]);

$idGrupo = inserir('grupo', $dadosGrupo);

$arrayDados = selecionar("SELECT * FROM usuario WHERE nick = '$membro'");

$idUsuario = array_column($arrayDados, 'idUsuario');

$idUsuario = implode("", $idUsuario);

$usuarioGrupo = array("usuario_idUsuario" => $idUsuario, "grupo_idGrupo" => $idGrupo);

inserir('usuariogrupo', $usuarioGrupo);

$sucesso = mysqli_affected_rows($conexao);

offConexao();


if($sucesso >= 1) {
    $_SESSION["rankingGrupo"] = $dados;
    header("Location: rankingGrupo.php?id=$idGrupo");
 }else{
    header("Location: ../paginas/auxGrupo/criaGrupo.php?msg=2");
 }

?>