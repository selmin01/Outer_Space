<html>
 <head>
   <title>JOGO</title>
   <link rel="stylesheet" href="../estilo/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../estilo/css/main.css">
 </head>
 <body>
   <div class="container">
       <div class="mx-auto">
           <center><h1>OUTER SPACE</h1></center>
           <br>
           <form action="" method="post">
             <div>
              <?php
               echo "<a href='index.php?pagina=jogo'><button type='button'>Jogar</button></a>"
              ?>
             </div>
             <div>
              <?php
                echo "<a href='index.php?pagina=grupo'><button type='button'>Grupo</button></a>"
              ?>
             </div>
             <div>
              <?php
                echo "<a href='index.php?pagina=ranking'><button type='button'>Ranking</button></a>"
              ?>
             </div>
             <div>
              <?php
                echo "<a href='index.php?pagina=sair'><button type='button'>Sair</button></a>"
              ?>
             </div>
           </form>

       </div>
   </div>

 </body>
</html>
