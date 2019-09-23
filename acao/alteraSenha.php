<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["confir_senha"]);
$nick = $_POST["nick"];

$id = selecionarId("SELECT * FROM usuario WHERE 'nick' = $nick");

alterar('usuario', $_POST, $id);
?>