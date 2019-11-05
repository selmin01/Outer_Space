<?php
session_start();
$nick = isset($_POST["nick"]) ? $_POST["nick"] : "";
$senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

include "../bancoOuterSpace/banco.php";
onConexao();
$arrayUsu = selecionar("SELECT * FROM usuario WHERE senha='$senha' and nick='$nick'");
offConexao();
//print_r($arrayUsu);
$id_usuario = $arrayUsu [0]["idUsuario"];
$permissao = $arrayUsu [0]["permissao"];
$usuario = array("idUsuario"=>$id_usuario ,"nick"=>$nick, "senha"=>$senha, "permissao"=>$permissao);
//print_r($usuario);
if ($usuario["permissao"] == 1){
    header("Location: sessaoAdm.php");
}else if(count($arrayUsu)==1){
    $_SESSION["usuario"] = $usuario;
    header("Location: ../paginas/menu.php?msg=saudacoes");
}else{
    unset($_SESSION["usuario"]);
    header("Location: ../paginas/login.php?msg=1");
}
//print_r( $_SESSION["usuario"]);
?>