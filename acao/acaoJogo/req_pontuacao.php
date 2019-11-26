<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
    $idUsuario = $usuario["idUsuario"];
    $pont = $_REQUEST["pont"];
   
    onConexao();

    $arrayPonto = selecionar("SELECT maxPonto, pontos FROM usuario WHERE idUsuario = '$idUsuario'");
    $maxPonto = $arrayPonto[0]["maxPonto"];
    $auxPont = $arrayPonto[0]["pontos"];
    //print_r($arrayDados);
    echo $maxPonto;
    echo $auxPont;
    $pont+=$auxPont;
    echo " ", $pont;

    $dados= array("idUsuario"=>$idUsuario, "pontos"=>$pont);

    alterar("usuario",$dados,"idUsuario=".$idUsuario);
    
    offConexao();
}
?>