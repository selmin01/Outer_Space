<pre>
<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_SESSION["post"];

print_r($dados);

$grupo = $dados["descricaoGrupo"];
print_r($grupo);
$membro = $dados["usuario_idUsuario"];
print_r($membro);


$dadosRanking = array("usuario_idUsuario" => $membro, "ponto" => 0);
print_r($dadosRanking);

onConexao();

$idRanking = inserir('rankinggrupo', $dadosRanking);

$dadosGrupo = array("rankingGrupo_idRankingGrupo" => $idRanking, "descricaoGrupo" => $grupo);
print_r($dadosGrupo);

$idGrupo = inserir('grupo', $grupo, $idRanking);

$arrayDados = selecionar("SELECT * FROM usuario WHERE nick = '$membro'");

$idUsuario = array_column($arrayDados, 'idUsuario');

$idUsuario = implode("", $idUsuario);

$dadosUsuarioGrupo = array("usuario_idUsuario" => $idUsuario, "grupo_idGrupo" => $idGrupo);
print_r($dadosUsuarioGrupo);

inserir('usuariogrupo', $membro, $idGrupo);

offConexao();

?>
</pre>