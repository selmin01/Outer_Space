<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
    $idUsuario = $usuario["idUsuario"];
    $pont = $_POST["pont"];
    $dados= array("idUsuario"=>$idUsuario, "pontos"=>$pont);
    onConexao();
    alterar("usuario",$dados,"idUsuario=".$idUsuario);
    offConexao();
}
?>