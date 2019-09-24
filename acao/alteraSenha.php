<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["nome"]);
unset($_POST["confir_senha"]);

$nick = $_POST["nick"];

$id = selecionarId("SELECT * FROM usuario WHERE nick = '$nick'");

unset($_POST["nick"]);

$id = implode("", $id);

alterar('usuario', $_POST, $id);

header("Location: ../paginas/login.php");
?>