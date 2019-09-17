<?php

// A validação vai ser feita na página, e enviará como parametro o script
// cadastrarUsuario("INSERT INTO usuario (nome, nick, email, senha) VALUE ('$nome', '$email', '$nick', '$senha')")
/*
function cadastrarUsuario($script) {

    $conexao = mysqli_connect("root", "root", "root", "outerspace");

    $cadastro = mysqli_query($conexao, $script) OR die(mysqli_error($conexao));

    $sucesso = mysqli_affected_rows($conexao);

    if($sucesso > 0) {
        header("Location: index.php?pagina=esqueciSenha&sucesso=1");
    }

    mysqli_close($conexao);

}
*/

$conexao = mysqli_connect("localhost", "root", "root", "outerspace");

function inserir($tabela, $dados){

    $campos = array_keys($dados);

    $sql = "INSERT INTO ".$tabela." (";

    foreach($campos as $campo){
        $sql.=$campo.",";
    }

    $sql = substr($sql,0, -1);

    $sql.=") VALUES (";

    foreach($dados as $dado){
        $sql.="'".$dado."',";
    }

    $sql = substr($sql,0, -1);

    $sql.=")";
    
    $resultado = executar($sql);
    
    return $resultado;
}

function executar($sql){

    global $conexao;

    return mysqli_query($conexao, $sql);
}
?>

?>