<?php
session_start();
$nick = isset($_POST["nick"]) ? $_POST["nick"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";
$usuario = array("nick"=>$nick, "senha"=>$senha);

include "../bancoOuterSpace/banco.php";
onConexao();
$arrayUsu = selecionar("SELECT * FROM usuario WHERE senha='$senha' and nick='$nick'");
offConexao();

if(count($arrayUsu)==1){
    $_SESSION["usuario"] = $usuario;
    header("Location: ../paginas/menu.php");
}else{
    unset($_SESSION["usuario"]);
    header("Location: ../paginas/login.php?msg=5");
}
//print_r( $_SESSION["usuario"]);
?>