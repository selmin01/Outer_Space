<?php

include "../bancoOuterSpace/banco.php";

unset($_POST["confir_senha"]);

alterar('usuario', $_POST);
?>