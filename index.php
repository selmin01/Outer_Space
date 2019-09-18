<html>
  <?php
    include ("template/header.php");

    $getPagina = isset($_GET["pagina"]) ? $_GET["pagina"]:"";

    switch ($getPagina) {
      case 'menu':
        include 'paginas/menu.php';
        break;
      case 'ranking':
        include 'paginas/ranking.php';
        break;
      case 'grupo':
        include 'paginas/grupo.php';
        break;
      case 'jogo':
        include 'paginas/jogo.php';
        break;
      case 'sair':
        
        break;
      default:
        
        break;
    }
    //include '../assets/template/footer.php'
  ?>
</html>