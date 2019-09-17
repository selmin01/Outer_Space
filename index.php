<?php

$getPagina = isset($_GET["pagina"]) ? $_GET["pagina"]:"";

switch ($getPagina) {
  case 'home':
    include 'paginas/home.php';
    break;
  case 'ranking':
    include 'paginas/ranking.php';
    break;
  case 'grupo':
    include 'paginas/grupo.php';
    break;
  case 'esqueciSenha':
    include 'paginas/esqueciSenha.php';
    break;
  case 'cadastro':
    include 'paginas/cadastro.php';
    break;
  case 'jogo':
    include 'paginas/jogo.php';
    break;
  case 'sair':
    include 'paginas/login.php';
    break;
  default:
    include 'paginas/login.php';
    break;
}
//include '../assets/template/footer.php'

?>
