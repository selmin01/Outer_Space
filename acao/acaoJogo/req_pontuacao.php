<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $idUsuario = $usuario["idUsuario"];
    $pont = $_POST["pont"];
    $dados= array("idUsuario"=>$idUsuario, "pontos"=>$pont);
    //print_r($dados);
    aleterar("usuario",$dados,"idUsuario=".$idUsuario):
}

echo $pont;
?>