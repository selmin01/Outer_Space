<pre>
<?php
include "../acao/persistenciaUsuario.php";
include "../acao/rankingGeral.php";
?>
</pre>
<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/ranking.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
    </head>
    <body>
        <div class="container">
            <div class="mx-auto ranking">
                <center><h1 class="font">RANKING</h1></center>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Pos</th>
                        <th scope="col">Nickname</th>
                        <th scope="col">Pontuação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1º</th>
                        <?php
                            echo "<td>". $ranking[0]['usuario']. "</td>";
                            echo "<td>". $ranking[0]['ponto']. "</td>";
                        ?> 
                        </tr>
                        <tr>
                        <th scope="row">2º</th>
                        <?php
                            echo "<td>". $ranking[1]['usuario']."</td>";
                            echo "<td>".$ranking[1]['ponto']."</td>";
                        ?>
                        </tr>
                        <tr>
                        <th scope="row">3º</th>
                        <?php
                            echo "<td>". $ranking[2]['usuario']."</td>";
                            echo "<td>".$ranking[2]['ponto']."</td>";
                        ?>
                        </tr>
                        <tr>
                        <th scope="row">4º</th>
                        <?php
                            echo "<td>". $ranking[3]['usuario']."</td>";
                            echo "<td>".$ranking[3]['ponto']."</td>";
                        ?>
                        </tr>
                        <tr>
                        <th scope="row">5º</th>
                        <?php
                            echo "<td>". $ranking[4]['usuario']."</td>";
                            echo "<td>".$ranking[4]['ponto']."</td>";
                        ?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="col-sm-2">
            <?php
                echo "<a class='linkbtn' href='menu.php' ><button type='button' class='btn btn-dark btn-lg btn-block font botao'><< Voltar</button></a>"
            ?>
        </div>
    </body>
</html>
