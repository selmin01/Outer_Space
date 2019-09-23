<html>
    <body>
        <form action="#" method="post">
            <!-- NOME<input type="text" name="nome"/> -->
            <!-- EMAIL<input type="email" name="email"/> -->
            <!-- USUARIO<input type="text" name="nick"/> -->
            SENHA<input type="password" name="senha"/>
            <button type="submit" value="Enviar">Aperte</button>
        </form>
    </body>
</html>

<pre>
<?php

$conexao = mysqli_connect("localhost", "root", "root", "outerspace");

$idArray = selecionar("SELECT * FROM usuario WHERE nick = 'zika'");
$id = implode("", $idArray);
alterar('usuario', $_POST, $id);
//inserir('usuario', $_POST);

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
// INSERT INTO orcamento VALUES(DEFAULT, '$cliente', $hora, $valorHora)
// UPDATE orcamento SET cliente = '$cliente', horas = $totalHora, valorHora = $valorHora

function alterar($tabela, $dados, $id) {

    $campos = array_keys($dados);

    $sql = "UPDATE " .$tabela. " SET ";

    foreach($campos as $campo) {
        $sql.=$campo;
        foreach($dados as $dado) {
            $sql.=" = '".$dado."', ";
            array_shift($dados);
            break;
        }
    }
print_r($dados);
    $sql = substr($sql, 0, -2);

    $sql.= " WHERE idUsuario = ". $id;

    echo $sql;

    $resultado = executar($sql);

    return $resultado;
}

function selecionar($sql){
    $consulta = executar($sql);
    $arrayDados = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
    return $arrayDados;
}

function selecionarId($sql){
    $arrayDados = selecionar($sql);
    $id = array_column($arrayDados, 'idUsuario');
    return $id;
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
