<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $idUsuario = $usuario["idUsuario"];
    $pont = $_POST["pont"];
    $dados= array(0=>$idUsuario, 1=>$pont);
    aleterar("usuario",$dados):
}

echo $pont;
?>