<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["confir_senha"]);

onConexao();

inserir('usuario', $_POST);

$sucesso = mysqli_affected_rows($conexao);

offConexao();

if($sucesso >= 1) {
    header("Location: ../paginas/login.php?msg=1");
}else {
    header("Location: ../paginas/cadastro.php?msg=2");
}
?>