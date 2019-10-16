<?php
session_start();

if(!empty($_SESSION["usuario"])) {
    unset($_SESSION["usuario"]);
    header("Location: ../index.php?pagina=sair");
}


?>