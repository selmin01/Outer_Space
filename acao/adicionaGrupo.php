<?php
session_start();
include "../bancoOuterSpace/banco.php";

$usuario = $_SESSION["usuario"];

$grupo = $_SESSION["dadosGrupo"];

$idGrupo = $grupo[0]["idGrupo"];

$nick = $usuario["nick"];

onConexao();

$arrayUsuario = selecionar("SELECT * FROM usuario WHERE nick = '$nick'");

$idUsuario = array_column($arrayUsuario, "idUsuario");

$idUsuario = implode("", $idUsuario);

$usuarioGrupo = array("grupo_idGrupo" => $idGrupo, "usuario_idUsuario" => $idUsuario);

inserir('usuarioGrupo', $usuarioGrupo);

$rankingGrupo = array("grupo_idGrupo" => $idGrupo, "usuario" => $nick, "ponto" => 0);

inserir('rankinggrupo', $rankingGrupo);

$sucesso = mysqli_affected_rows($conexao);

offConexao();

$descricaoGrupo = $grupo[0]["descricaoGrupo"];

$ranking = array("nick" => $nick,"descricaoGrupo" => $descricaoGrupo);

if($sucesso >= 1) {
    $_SESSION["rankingGrupo"] = $ranking;
    header("Location: rankingGrupo.php?id=$idGrupo");
} else {
    header("Location: ../paginas/auxGrupo/codigoGrupo.php?msg=2");
}
?>