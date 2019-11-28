<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $idUsuario=$usuario["idUsuario"];

    onConexao();
    $arrayFase = selecionar("SELECT tempo, qtdMeteoro, velocidadeNave  FROM fase 
    INNER JOIN usuario WHERE idUsuario = '$idUsuario'");
    offConexao();

    header("Location: ../../paginas/jogo.php");
}

?>