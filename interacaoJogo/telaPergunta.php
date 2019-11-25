<pre>
<?php
session_start();

include "../bancoOuterSpace/banco.php";

$pergunta = $_SESSION["pergunta"];

onConexao();

$idtema = $pergunta[0][0]["tema_idTema"];

$tema = selecionar("SELECT descricaoTema FROM tema WHERE idTema = $idtema");

offConexao();

?>
</pre>
<html>

<head>
<meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/interacaojogo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){
            $("input").click(function(e){
                e.preventDefault();
                var resposta = $(this).val();
                $.ajax({
                    url: "../acao/validaResposta.php",
                    type: "POST",
                    data: "resp="+resposta,
                    dataType: "html"
                }).done(function(resposta) {
                    console.log(resposta);
                }).fail(function(jqXHR, textStatus ) {
                    console.log("Request failed: " + textStatus);
                });
            }); 
        });
    </script>
  
</head>


<body>


<div class="container">

            <div class="mx-auto font resposta">
                <center><h1 class="font"><?php echo $tema[0]["descricaoTema"];?></h1></center>
                <br>
                <form class="font" action="" method="post">
                <center><div class="fontResposta" id="pergunta">
                        <?php
                          echo $pergunta[0][0]["descricaoPergunta"]; 
                        ?>
                    </div></center>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $pergunta[1][0]["descricaoAlternativa"]; ?>">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $pergunta[1][1]["descricaoAlternativa"]; ?>"> 
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $pergunta[1][2]["descricaoAlternativa"]; ?>"> 
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $pergunta[1][3]["descricaoAlternativa"]; ?>"> 
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>