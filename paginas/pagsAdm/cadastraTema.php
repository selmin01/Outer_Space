<html>
    <head>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../estilo/css/cadastroTema.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron&amp;display=swap" rel="stylesheet">
    
    </head><body>
        <div class="container">
            <form action="../../acao/cadastraPergunta.php" method="post">
                <div class="row">
                    <div class="col-md-12 mt-5 titulo font">
                        <h1>Cadastro de Perguntas</h1>
                    </div>
                    <div class="col-md-6 boxTema font">
                        <div class="form-group ">
                            <label for="formGroupExampleInput"><h4>Tema:</h4></label>
                            <input type="text" class="form-control" name="tema" maxlength="" required=""> 
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h4>Pergunta:<h4></label>
                            <input type="text" class="form-control" name="pergunta" maxlength="" required="">
                        </div>
                    </div>
                    <div class="col-md-6 boxResposta">
                        <h4>Resposta:</h4>
                        <br>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">A</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="respostaA" maxlength="" required=""> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">B</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="respostaB" maxlength="" required=""> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">C</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="respostaC" maxlength="" required=""> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">D</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" name="respostaD" maxlength="" required=""> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 pt-5">
                        <button type="submit" class="btn btn-dark btn-lg btn-block font">Cadastrar</button>
                        <button type="button" class="btn btn-dark btn-lg btn-block font">Voltar</button>
                    </div>
                </div>           
            </form>
        </div>
    </body>
</html>