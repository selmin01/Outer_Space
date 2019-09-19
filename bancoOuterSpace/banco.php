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
<<<<<<< Updated upstream
=======
/*
function cadastrarUsuario($script) {

    $conexao = mysqli_connect("root", "root", "root", "outerspace");

    $cadastro = mysqli_query($conexao, $script) OR die(mysqli_error($conexao));

    $sucesso = mysqli_affected_rows($conexao);
>>>>>>> Stashed changes

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
    
    // Pega a string do $sql e exclui o último valor
    $sql = substr($sql,0, -1);

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
