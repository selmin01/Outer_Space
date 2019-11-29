<pre>
<?php 

session_start(); 

include "../bancoOuterSpace/banco.php";

$pergunta = $_SESSION ["pergunta"];

$idBonus = $pergunta[0][0]["bonus_idBonus"];

onConexao();

$bonusPerg = selecionar("SELECT b.valor, t.descricaoTipo
                        FROM bonus b INNER JOIN tipo t
                        ON b.tipo_idTipo = t.idTipo
                        WHERE b.idBonus = $idBonus");

offConexao();

//print_r ($bonusPerg);
?>
</pre>

<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/proxFase.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="mx-auto proxFase">
                <center>
                    <h1 class="font"> Parabéns, você acertou a resposta!</h1>
                    <h5>Você passou para a proxima fase</h5>
                    <br>
                    <h3>Seu Bonus: <?php print_r ($bonusPerg[0]["descricaoTipo"]);?></h3>
                    <br>
                    <a href="../paginas/jogo.php" class="linkbtn">
                        <button type='button' class='btn btn-warning btn-block'>OK</button>
                    </a> 
                </center>
            </div>
        </div>
    </body>
</html>