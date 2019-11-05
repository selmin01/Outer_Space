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

                        <?php
                            $pos = 0;
                            foreach($ranking as $chave => $valor) {
                                $pos ++;
                                echo "<tr>";
                                echo "<th scope='row'>". $pos ."º</th>";
                                echo "<td>". $ranking[$chave]['usuario']. "</td>";
                                echo "<td>". $ranking[$chave]['ponto']. "</td>";
                                echo "</tr>";
                                echo "<tr>";
                            }
                        ?>
                       
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
