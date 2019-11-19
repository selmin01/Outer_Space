<?php
include "../acao/persistenciaUsuario.php";

include "../bancoOuterSpace/banco.php";
if(isset($_SESSION["usuario"])){
  $usuario = $_SESSION["usuario"];
  $nick = $usuario["nick"];
  $idUsuario = $usuario["idUsuario"];
}
onConexao();
$pontos = selecionar("SELECT maxponto FROM usuario WHERE idUsuario = $idUsuario");
$recorde = $pontos[0]["maxponto"];
offConexao();

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
    <div class="pontuacao">
      <?php
        echo "Meteoros Destruídos: 0";
      ?>
    </div>
    <div class="maxponto">
    <?php 
        echo "Seu Recorde: ".$recorde;
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
