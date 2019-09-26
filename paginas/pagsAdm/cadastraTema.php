<html>
<head>
    <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../estilo/css/main.css"/>
<head>
<body>
<div class="container">
    <div class="mx-auto font">
        <center><h2 calss="">Cadastro do Tema</h2></center>
        <br>
<<<<<<< Updated upstream
        <form action="" method="post">
            <div class="boxTema">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tema:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="tema" maxlength="" required> 
                    </div>
=======
        <form action="../../acao/cadastraPergunta.php" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tema:</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="tema" maxlength="" required> 
>>>>>>> Stashed changes
                </div>
                <div>
                    <center><h2>Cadastrar Pergunta</h2></center>
                    <br>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pergunta:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="pergunta" maxlength="" required> 
                    </div>
                </div>
            </div>
            <div class="boxResposta">
                <div>
                    <center><h5>Resposta:</h5></center>
                    <br>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">A</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="respostaA" maxlength="" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">B</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="respostaB" maxlength="" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">C</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="respostaC" maxlength="" required> 
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">D</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="respostaD" maxlength="" required> 
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block font">Cadastrar</button>
        </form>
            <button type="button" class="btn btn-dark btn-lg btn-block font">Voltar</button>
    </div>
</div>
</body>

</html>