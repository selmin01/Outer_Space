<?php
$conexao= msqli_connect("localhost","root","root","outerspace");

if(isset($_GET["cod"])&& $_GET["cod"]==1){
    function cadastrar();
}elseif(isset($_GET["cod"])&& $_GET["cod"]==2){
    function alterarSenha();
}

msqli_close($conexao);

function cadastrar(){
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $nick = isset($_POST["nick"]) ? $_POST["nick"] : "";
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : "";

    $query = mysqli_query($conexao, "INSERT INTO usuario(id_usuario,nome,nick,email,senha) 
    VALUE(DEFAULT,'$nome','$email','$nick','$senha')");
}
?>
