<?php
session_start();
include "../../bancoOuterSpace/banco.php"; 
if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
    $nick = $usuario["nick"];
}
if(isset($_SESSION["rankingGrupo"])){
    $dados = $_SESSION["rankingGrupo"];
    $codGrupo= $dados[0]["codigo"];
    $nomeGrupo= $dados[0]["descricaoGrupo"];
}
?>


<html>
    <head>

        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../estilo/css/grupo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    </head>
    <body>
    
    <div class="mx-auto box">
            <center>
                <h1 class="font titulo">SEUS GRUPOS</h1>
            </center>
            <div class="form-group row">
                <div class="col-sm-12">
                    <!--<center><h3 class="font2"> >> <?php //echo($nomeGrupo)?> << </h3></center>-->
                    <br>
                    
                        <div class="container">
                            <div class="mx-auto RankingGrupo">
                                <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col"></th>
                                    <th scope="col"><h4>Grupos</h4></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    if(isset($_SESSION["rankingGrupo"])){
                                        foreach ($dados as $key => $grupo){
                                            $key++;
                                            echo "<tr>";
                                            echo "<td>";
                                            echo "<h5>".$key."º</h5>";
                                            echo "</td>";
                                            echo "<td>";
                                            echo "<a href='../../acao/rankingGrupo.php?codigo=$codGrupo'><h5>".$grupo['descricaoGrupo']."</h5></a>";
                                            echo "</td>";
                                        }
                                    }
                                ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    <br>

                </div>
            </div>
        </div>





    </body>
</html>