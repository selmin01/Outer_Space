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
    <div class="mx-auto boxCriaGrupo">
            <center>
                <h1 class="font titulo">Criar Grupo</h1>
            </center>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <center>
                    <form action="../../acao/validaGrupo.php" method="post" name="" onsubmit="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nome do Grupo:</label>
                            <input type="text" class="form-control" name="descricaoGrupo" maxlength="50" required/>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Seu Nick:</label>
                            <input type="text" class="form-control" name="usuario_idUsuario" maxlength="50" required/>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block font botoes">Criar</button>
                    </form>
                    </center>
                </div>
            </div>
        </div>
        <br>
        <br>
        <center>
        <div class="col-sm-12">
            <?php
                echo "<a class='linkbtn' href='../grupo.php'><button type='button' class='btn btn-dark btn-lg btn-block font botoes'><< Voltar</button></a>"
            ?>
        </div>
        </center>
    </body>
</html>
<?php
$msg= isset($_GET["msg"]) ? ($_GET["msg"]) :"";
if($msg==1){
    echo("<script>$(document).ready( function (){ alert('Já existe um grupo com esse nome ou esse usuário não existe.'); });</script>");
}