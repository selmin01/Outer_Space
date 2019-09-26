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
    echo "Já tem usuario com esse nick";
}
?>