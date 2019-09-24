<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["confir_senha"]);

inserir('usuario', $_POST);

header("Location: ../paginas/login.php");
?>