<?php
session_start();
$nick = isset($_POST["nick"]) ? $_POST["nick"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";


$usuario = array("nick"=>$nick, "senha"=>$senha);

if( isset($_SESSION["S_usuario"])){
    $_SESSION["S_usuario"] [] = $usuario;
    header("Location: ../../home/index.php");
    //echo $usuario;
    //echo $_SESSION["S_usuario"];
}else{
    $_SESSION["S_usuario"] = array($usuario);
    header("Location: ../../home/index.php");
}
?>