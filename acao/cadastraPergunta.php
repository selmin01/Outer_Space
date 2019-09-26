<?php
session_start();

include "../bancoOuterSpace/banco.php";

inserir('pergunta', $_POST);
inserir('tema', $_POST);

print_r ($_POST);


?>