<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
    <div class="container">
        <div class="mx-auto caixa">
            <center><h1>Login</h1></center>
            <br>
            <form action="../assets/php/validaLogin.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Usuário:</label>
                    <div class="col-sm-10">
	                <input type="text" class="form-control" name="nick" maxlength="20" required>
                    </div>
                </div>
  
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Senha:</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="senha" maxlength="20" required> 
                    </div>
                </div>
            
                <input type="hidden" class="btn btn-link" name="AlteraSenha" value="sim">
                    <center><a href="esqueciSenha.php">Esqueci Minha Senha</a></center>
                    <br>
                <button type="submit" class="btn btn-success btn-block">Entrar</button>
                
                <button type="button" class="btn btn-dark btn-block">Cadastrar</button>
            </form>
        </div>
    </div>

    </body>
</html>