
<html>
    <head>
        <meta charset="utf-8">
        <title>Outer Space</title>
        <link rel="stylesheet" href="../estilo/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../estilo/css/main.css"/>
        <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet"/>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="mx-auto caixa">
                <center><h1 class="font">Login</h1></center>
                <br>
                <form action="../acao/validaLogin.php" method="post">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Usuário:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="nick" maxlength="20" required/>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Senha:</label>
                        <div class="col-sm-10">
                        <input type="password" class="form-control" name="senha" maxlength="20" required/>
                        </div>
                    </div>

                    <center><a href='esqueciSenha.php'>Esqueci Minha Senha</a></center><br>
                    <button type="submit" class="btn btn-success btn-block">Entrar</button>
                </form>
                <a href="cadastro.php" class="linkbtn">
                    <button type='button' class='btn btn-dark btn-block'>Cadastrar</button>
                </a> 
            </div>
        </div>
    </body>
</html>
<?php
$msg= isset($_GET["msg"]) ? ($_GET["msg"]) :"";
if($msg==1){
    echo("<script>$(document).ready( function (){ alert('Você foi cadastrado com sucesso!'); });</script>");
}elseif ($msg==3) {
    echo("<script>$(document).ready( function (){ alert('Sua senha foi alterada com sucesso!'); });</script>");
}
?>