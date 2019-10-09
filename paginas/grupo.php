<?php

?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/grupo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <div class="mx-auto box">
            <center>
                <h1 class="font titulo">GRUPO</h1>
            </center>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <center>
                    <?php
                        echo "<a class='linkbtn' href='auxGrupo/codigoGrupo.php'><button type='button' class='btn btn-dark btn-lg btn-block font botoes'>Entrar em Grupo</button></a>"
                    ?>
                    <br>
                    <?php
                        echo "<a class='linkbtn' href='auxGrupo/criaGrupo.php'><button type='button' class='btn btn-dark btn-lg btn-block font botoes'>Criar Grupo</button></a>"
                    ?>
                    <br>
                    <?php
                        echo "<a class='linkbtn' href='auxGrupo/dadosGrupo.php'><button type='button' class='btn btn-dark btn-lg btn-block font botoes'>Visualizar Grupo</button></a>"
                    ?>
                    </center>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <center>
        <div class="col-sm-12">
            <?php
                echo "<a class='linkbtn' href='menu.php'><button type='button' class='btn btn-dark btn-lg btn-block font botoes'><< Voltar</button></a>"
            ?>
        </div>
        </center>
    </body>
</html>