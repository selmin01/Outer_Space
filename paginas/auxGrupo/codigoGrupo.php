<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../../estilo/css/grupo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
    </head>
    <body>
    <div class="mx-auto box">
            <center>
                <h1 class="font titulo">Insira o Código do Grupo</h1>
            </center>
            <br>
            <div class="form-group row">
                <div class="col-sm-12">
                    <center>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="codigoGrupo" maxlength="50" required/>
                        </div>
                        <button type="submit" class="btn btn-dark btn-lg btn-block font botoes">Enviar</button>
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