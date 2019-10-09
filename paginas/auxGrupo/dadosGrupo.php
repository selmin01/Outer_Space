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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
    </head>
    <body>
        <center>
        <div class="dropdown">
            <button class="btn btn-dark dropdown-toggle btn-lg font" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Grupos
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        </center>
        <div class="mx-auto box">
            <center>
                <h1 class="font titulo">SEU GRUPO</h1>
            </center>
            <div class="form-group row">
                <div class="col-sm-12">
                    <center><h3 class="font2"> >> <?php echo($nomeGrupo)?> << </h3></center>
                    <br>
                        <?php 
                            onConexao();
                            $rankingGrupo = selecionar("SELECT * FROM rankinggrupo WHERE idRankingGrupo = '$idRankingGrupo'");
                            offConexao();
                        ?>
                        <div class="container">
                            <div class="mx-auto RankingGrupo">
                                <table class="table table-sm">
                                <thead>
                                    <tr>
                                    <th scope="col">Pos</th>
                                    <th scope="col">Integrantes</th>
                                    <th scope="col">Pontuação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if(isset($_SESSION["dadosGrupo"])){
                                        foreach ($rankingGrupo as $key => $usu){
                                            $key++;
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $key."º";
                                            echo "</td>";
                                            echo "<td>";
                                            echo $usu["usuario"];
                                            echo "</td>";
                                            echo "<td>";
                                            echo $usu["ponto"];
                                            echo "</td>";     
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    <br>
                    <center><h5>Código do grupo: <?php echo($codGrupo)?></h5></center>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-sm-2">
            <?php
              echo "<a class='linkbtn' href='../grupo.php'><button type='button' class='btn btn-dark btn-lg btn-block font botao'><< Voltar</button></a>"
            ?>
        </div>
    </body>
</html>