<?php
include "../acao/acaoPergunta/randomPergunta.php";

?>
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
            //$("#alter1").click(function(){
                //$("#pergunta").fadeIn(500);
            //});
            $("#pergunta").click(function(){
                var resposta = $("#txtResposta").val();

                $.ajax({
                    url: "../acao/validaResposta.php",
                    type: "POST",
                    data: "pergunta&resp="+resposta,
                    success: function(resp) {
                        console.log(resp);
                    }
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
                          echo $pergunta[0]["descricaoPergunta"]; 
                        ?>
                    </div></center>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $alternativas[0]["descricaoAlternativa"]; ?>" id="txtResposta">
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $alternativas[1]["descricaoAlternativa"]; ?>" id="txtResposta"> 
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $alternativas[2]["descricaoAlternativa"]; ?>" id="txtResposta"> 
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="<?php echo $alternativas[3]["descricaoAlternativa"]; ?>" id="txtResposta"> 
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>