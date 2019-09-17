<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
    <div class="container">
        <div class="mx-auto font box2">
            <center><h1>Esqueci Minha Senha</h1></center>
            <br>
            <form action="index.php" method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nome:</label>
                    <div class="col-sm-10 col-xs-3">
	                <input type="text" class="form-control" name="nome" maxlength="50" required>
                    </div>
                </div>
<!--
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" maxlength="80" required> 
                    </div>
                </div>
-->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Usuário:</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nick" maxlength="50" required> 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Senha:</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="senha" maxlength="50" required> 
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Confirmar Senha:</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="confir_senha" maxlength="50" required> 
                    </div>
                </div>
            
                <button type="submit" class="btn btn-primary btn-block">Alterar</button>
            </form>
            <button type="submit" class="btn btn-dark btn-block">Voltar</button>
        </div>
    </div>
    </body>
</html>