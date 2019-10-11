<?php
session_start();
$nick = isset($_POST["nick"]) ? $_POST["nick"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
$usuario = array("nick"=>$nick, "senha"=>$senha);

include "../bancoOuterSpace/banco.php";
onConexao();
selecionar("SELECT * FROM usuario WHERE senha='$senha' and nick='$nick'");
$sucesso = mysqli_affected_rows($conexao);
offConexao();


if( isset($_SESSION["usuario"])){
    $_SESSION["usuario"] [] = $usuario;
    header("Location: ../paginas/menu.php");
}else{
    $_SESSION["usuario"] = array($usuario);
    header("Location: ../paginas/menu.php");
}

if($sucesso >= 1) {
    header("Location: ../paginas/menu.php");
}else {
    header("Location: ../paginas/login.php?msg=5");
}
?>