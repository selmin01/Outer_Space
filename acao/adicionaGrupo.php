<pre>
<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_SESSION["post"];

$grupo = array($dados["descricaoGrupo"]);

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

$dadosUsuarioGrupo = array("usuario_idUsuario" => $idUsuario, "grupo_idGrupo" => $idGrupo);

$usuarioGrupo = array("usuario_idUsuario" => $idUsuario, "grupo_idGrupo" => $idGrupo);

inserir('usuariogrupo', $usuarioGrupo);

offConexao();
?>
</pre>