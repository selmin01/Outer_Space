<?php

include "../bancoOuterSpace/banco.php"

unset(_$POST["confir_senha"]);

inserir('usuario', $_POST);

?>