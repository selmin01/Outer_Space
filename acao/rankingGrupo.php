<pre>
<?php
include "../bancoOuterSpace/banco.php";
session_start();

$dados = $_SESSION["rankingGrupo"];

print_r($dados);

$grupo = $dados["descricaoGrupo"];

echo $grupo;

onConexao();

$arrayDados = selecionar("SELECT u.nick, g.descricaoGrupo, rg.ponto 
                            FROM usuario u INNER JOIN usuariogrupo ug 
                            ON u.idUsuario = ug.usuario_idUsuario 
                            INNER JOIN grupo g 
                            ON ug.grupo_idGrupo = g.idGrupo 
                            INNER JOIN rankinggrupo rg 
                            ON g.rankingGrupo_idRankingGrupo = rg.idRankingGrupo 
                            WHERE g.descricaoGrupo = '$grupo' 
                            ORDER BY rg.ponto;");

offConexao();

$sucesso = mysqli_affected_rows($conexao);

if($sucesso >= 1) {
    header("Location: ../paginas/auxGrupo/dadosGrupo.php");
} else {
    header("Location: ../paginas/auxGrupo/telaGrupo.php?msg=5");
}

?>
</pre>