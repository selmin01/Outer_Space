<html>
    <body>
        <form action="#" method="post">
            NOME<input type="text" name="nome"/>
            EMAIL<input type="email" name="email"/>
            USER<input type="text" name="user"/>
            SENHA<input type="password" name="senha"/>
            <button type="submit" value="Enviar">Aperte</button>
        </form>
    </body>
</html>

<pre>
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

//selecionar("SELECT * FROM usuario");

inserir('usuario', $_POST);

function inserir($tabela, $dados){
    print_r($dados);
    $campos = array_keys($dados);
    print_r($campos);
    $sql = "INSERT INTO ".$tabela." (";

    // Monta a 1ª estrutura
    foreach($campos as $campo){
        $sql.=$campo.",";
    }
    echo $sql;
    // 
    $sql = substr($sql,0, -1);
    echo $sql;
    $sql.=") VALUES (";

    // Monta a 2ª estrutura
    foreach($dados as $dado){
        $sql.="'".$dado."',";
    }

    $sql = substr($sql,0, -1);
  
    $sql.=")";
   
    $resultado = executar($sql);

    return $resultado;
}
/*
function alterar($tabela, $dados) {
    $campos = array_keys($dados);

    $sql = "UPDATE" .$tabela. " (";

    $sql.=") SET (";

    foreach($campos as $campo) {
        $sql.= .$campo. ","
    }

    $sql = substr($sql, 0, -1);

}
*/
function selecionar($sql){
    $consulta = executar($sql);
    $arrayDados = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    print_r($arrayDados);
    return $arrayDados;
}

function executar($sql, $where=null){

    global $conexao;

    if(!empty($where)){
        $sql.= " WHERE ". $where;
    }

    return mysqli_query($conexao, $sql);
}


?>
</pre>
