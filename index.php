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
      header("location: paginas/jogo.php");
        break;
      case 'sair':
        header("location: paginas/login.php");
        break;
      default:
        header("location: paginas/login.php");
        break;
    }
    //include '../assets/template/footer.php'
  ?>
</html>