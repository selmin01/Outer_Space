<pre>
<?php
session_start();
include "../../bancoOuterSpace/banco.php";

onConexao();

$arrayPergunta = selecionar("SELECT * FROM pergunta");

offconexao();

$n = count($arrayPergunta);

$rand = rand(1, $n);
    
if($n == 0) {
    echo "Não há nenhuma pergunta cadastrada";
    header("Location: ../../paginas/jogo.php");
} else {
    onConexao();
    $perguntaSelecionada = selecionar("SELECT * FROM pergunta WHERE idPergunta = '$rand'");
    $alternativa = selecionar("SELECT * FROM alternativa WHERE pergunta_idPergunta = '$rand'");
    offConexao();
    $pergunta = array($perguntaSelecionada, $alternativa);
    print_r($pergunta);
    $_SESSION["pergunta"] = $pergunta;
    header("Location: ../../interacaoJogo/telaPergunta.php");
}

/*
foreach($arrayPergunta as $array) {
    foreach($array as $chave => $valor) {
        if($chave == "idPergunta") {
            $idPergunta[] = $valor;
        }
    }
    $random = array_rand($idPergunta, 1);

    foreach($array as $chave => $valor) {
        echo $valor;
        if($chave == "idPergunta" && $valor != $random) {
            echo $chave[$valor];
            $pergunta[] = $chave[$valor];
        }
    }
}*/

?>
</pre>