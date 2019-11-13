<?php
include "../acao/persistenciaUsuario.php";
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Outer Space</title>
    <link rel="stylesheet" href="../estilo/css/main.css"/>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>
    <script>
      $(document).ready(function(){
        inicia();
        
      })
    </script>
  </head>
  <body>

    <div id="painel">

      <!-- Barra do Planeta-->
      <div id="vidaPlaneta">
        <div id="barraPlaneta"></div>
      </div>

      <!-- Contagem de bombas que faltam a ser lançadas -->
      <div id="contBombas"></div>

    </div>
    <div class="pontuacao" style="color: white;">
      <?php
        echo "Pontuação: ". "<script>document.write(pontuacao)</script>";
      ?>
    </div>

    <!-- Mostra a imagem de vitoria ou derrota -->
    <div id="telaMsg" class="telaMsg">
      <button id="btnJogar" class="btnJogar">Jogar</button>
    </div>

    <!-- Nave a ser controlada -->
    <div id="naveJog" class="naveJog"></div>
    
  </body>
</html>
