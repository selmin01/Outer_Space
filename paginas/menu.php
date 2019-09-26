<?php
  //session_start();
  //print_r ($_SESSION["S_usuario"]);
?>
<html>
 <head>
   <title>JOGO</title>
   <link rel="stylesheet" href="../estilo/css/bootstrap.min.css" />
<<<<<<< Updated upstream
   <link rel="stylesheet" href="../estilo/css/main.css"/>
=======
   <link rel="stylesheet" href="../estilo/css/main.css">
>>>>>>> Stashed changes
   <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
 </head>
 <body>
  <div class="container menu">
    <div class="mx-auto ">
      <center><h1 class="font">OUTER SPACE</h1></center>
      <br>
      <form action="" method="post">
        <div class="form-group row">
          <div class="col-sm-10">
            <?php
            echo "<a class='linkbtn' href='../index.php?pagina=jogo'><button type='button' class='btn btn-dark btn-lg btn-block font botao'>Jogar</button></a>";
            ?>
            <br>
          </div>
          <div class="col-sm-10">
          <?php
            echo "<a class='linkbtn' href='../index.php?pagina=grupo'><button type='button' class='btn btn-dark btn-lg btn-block font botao'>Grupo</button></a>"
            ?>
            <br>
          </div>
          <div class="col-sm-10 ">
            <?php
              echo "<a class='linkbtn' href='../index.php?pagina=ranking'><button type='button' class='btn btn-dark btn-lg btn-block font botao'>Ranking </button> </a>"
            ?>
            <br>
          </div>
          <div class="col-sm-10">
            <?php
              echo "<a class='linkbtn' href='../index.php?pagina=sair' ><button type='button' class='btn btn-dark btn-lg btn-block font botao'>Sair</button></a>"
            ?>
          </div>
      </form>
    </div>
  </div>
 </body>
</html>