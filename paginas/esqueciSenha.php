<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/main.css"/>
        <script type="text/javascript" src="../js/funcoes.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="mx-auto font box2">
                <center><h1>Esqueci Minha Senha</h1></center>
                <br>
                <form action="../acao/alteraSenha.php" method="post" name="altSenha" onsubmit="return esqueciSenha()">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nome:</label>
                        <input type="text" class="form-control" name="nome" maxlength="50" required/>
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

                    <button type="submit" class="btn btn-primary btn-block">Alterar</button>
                    
                </form>
                <a href="login.php" class="linkbtn">
                    <button type="submit" class="btn btn-dark btn-block">Voltar</button>
                </a>
            </div>
        </div>
    </body>
</html>