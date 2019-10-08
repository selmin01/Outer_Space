<?php
session_start();
include "../../bancoOuterSpace/banco.php"; 
if(isset($_SESSION["dadosGrupo"])){
    $codGrupo=$_SESSION["dadosGrupo"][0];
    $nomeGrupo=$_SESSION["dadosGrupo"][1][0];
    $idRankingGrupo = $_SESSION["dadosGrupo"][2];
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../estilo/css/grupo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <div class="mx-auto box">
            <center>
                <h1 class="font titulo">SEU GRUPO</h1>
            </center>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <center><h4><?php echo($nomeGrupo)?></h4></center>
                    <pre>
                        <?php 
                            onConexao();
                            $rankingGrupo = selecionar("SELECT * FROM rankinggrupo WHERE idRankingGrupo = '$idRankingGrupo'");
                            offConexao();
                            print_r($rankingGrupo);
                        ?>
                    </pre>
                    <center><h5>Código do grupo: <?php echo($codGrupo)?></h5></center>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        
        <div class="col-sm-2">
            <?php
              echo "<a class='linkbtn' href='menu.php' ><button type='button' class='btn btn-dark btn-lg btn-block font botao'><< Voltar</button></a>"
            ?>
        </div>
    </body>
</html>