<?php

$getPagina = isset($_GET['pagina']) ? $_GET['pagina']:'';

switch ($getPagina) {
  case 'home':
    include 'home.php';
    break;
  case 'ranking':
    include 'ranking.php';
    break;
  case 'grupo':
    include 'grupo.php';
    break;
  case 'esqueciSenha':
    include 'esqueciSenha.php';
    break;
  case 'cadastro':
    include 'cadastro.php';
    break;
  case 'jogo':
    include 'jogo.php';
    break;
  case 'sair':
    include 'login.php';
    break;
  default:
    include 'login.php';
    break;
}


include '../assets/template/footer.php'
?>
