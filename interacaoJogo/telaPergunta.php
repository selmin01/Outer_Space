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
            $("#btnMostrar").click(function(){
                $("#pergunta").fadeIn(500);
            });
            $("#btnEsconder").click(function(){
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
                <center><h1 class="font">Tema : Tecnologia</h1></center>
                <br>
                <form class="font" action="" method="post">
                    <div class="fontResposta" id="pergunta">
                        Quanto é 2+2 ?
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="12" id="txtResposta">
                        <button class="btn btn-outline-secondary"  type="button" id="btnMostrar">Button</button>
                    </div>
                    <div class="input-group mb-3">
                        <input type="submit" class="form-control fontResposta" value="12" id="txtResposta"> 
                        <button class="btn btn-outline-secondary" type="button" id="btnEsconder">Button</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>