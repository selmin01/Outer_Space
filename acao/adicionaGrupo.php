<?php
session_start();
include "../bancoOuterSpace/banco.php";

$dados = $_SESSION["post"];

print_r($dados);

$grupo = $dados["descricaoGrupo"];
print_r($grupo);
$membro = $dados["usuario_idUsuario"];
print_r($membro);

$arrayDados = selecionar("SELECT * FROM usuario WHERE nick = '$membro'");

$id = array_column($arrayDados, 'idUsuario');

$id = implode("", $id);

echo($id);
onConexao();





?>