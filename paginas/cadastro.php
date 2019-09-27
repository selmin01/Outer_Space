<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/main.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
        <script type="text/javascript" src="../js/funcoes.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="mx-auto boxCadastro">
                <center><h1 class="font">Cadastro de Usuários</h1></center>
                <br>
                <form action="../acao/verificaUsuario.php" method="post" name="cadUsuario" onsubmit="return validaCadastro()">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nome:</label>
                        <input type="text" class="form-control" name="nome" maxlength="50" required/>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">E-mail:</label>
                        <input type="email" class="form-control" name="email" maxlength="80" required/>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Usuário:</label>
                        <input type="text" class="form-control" name="nick" maxlength="50" required/>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Senha:</label>
                        <input type="password" class="form-control" name="senha" maxlength="50" required/>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput">Confirmar Senha:</label>
                        <input type="password" class="form-control" name="confir_senha" maxlength="50" required/>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                  
                </form>
                <a href="login.php" class="linkbtn">
                    <button type="button" class="btn btn-dark btn-block">Voltar</button>
                </a>
            </div>
        </div>
    </body>
</html>