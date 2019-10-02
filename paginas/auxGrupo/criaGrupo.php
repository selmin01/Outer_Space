<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../estilo/css/grupo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
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
                    <form action="" method="post" name="" onsubmit="">
                        <div class="form-group">
                            <label for="formGroupExampleInput">Nome do Grupo:</label>
                            <input type="text" class="form-control" name="nomeGrupo" maxlength="50" required/>
                        </div>

                        <div class="form-group">
                            <label for="formGroupExampleInput">Adicionar Membro:</label>
                            <input type="text" class="form-control" name="membroGrupo" maxlength="50" required/>
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