<?php
session_start();
//echo $_SESSION["S_usuario"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Outer Space</title>
    <link rel="stylesheet" href="../assets/css/main.css">
    <script type="text/javascript" src="../assets/js/script.js"></script>
  </head>
  <body>
    <div id="painel">
      <h3>Planeta</h3>
      <div id="vidaPlaneta">
        <div id="barraPlaneta"></div>
      </div>
      <div id="contBombas"></div>
    </div>

    <div id="telaMsg" class="telaMsg">
      <button id="btnJogar" class="btnJogar">Jogar</button>
    </div>

    <div id="naveJog" class="naveJog"></div>
  </body>
</html>
