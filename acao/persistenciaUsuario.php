<?php

session_start();
include "../bancoOuterSpace/banco.php";

onConexao();

if(!isset($_SESSION["usuario"])){
    header("Location: ../paginas/login.php?msg=7");
}

offConexao();

?>