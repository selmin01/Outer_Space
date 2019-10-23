<?php
include "../bancoOuterSpace/banco.php";
session_start();

$idGrupo = $_GET["id"];

$dados = $_SESSION["rankingGrupo"];

onConexao();

//$arrayGrupo = selecionar("SELECT * FROM");

$arrayDados = selecionar("SELECT u.nick, g.descricaoGrupo, g.codigo, rg.ponto 
                            FROM usuario u INNER JOIN usuariogrupo ug 
                            ON u.idUsuario = ug.usuario_idUsuario 
                            INNER JOIN grupo g 
                            ON ug.grupo_idGrupo = g.idGrupo 
                            INNER JOIN rankinggrupo rg 
                            ON g.idGrupo = rg.grupo_idGrupo 
                            WHERE g.idGrupo = '$idGrupo' 
                            ORDER BY rg.ponto;");

$sucesso = mysqli_affected_rows($conexao);
offConexao();

if($sucesso >= 1) {
    $_SESSION["rankingGrupo"] = $arrayDados;
    header("Location: ../paginas/auxGrupo/dadosGrupo.php");
} else {
    header("Location: ../paginas/auxGrupo/telaGrupo.php?msg=5");
}

?>