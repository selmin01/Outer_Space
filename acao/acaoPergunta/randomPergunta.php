<pre>
<?php

include "../../bancoOuterSpace/banco.php";

onConexao();

//$pergunta = selecionar("SELECT pergunta.idPergunta, pergunta.descricaoPergunta, alternativa.descricaoAlternativa, alternativa.opcaoCorreta FROM pergunta, alternativa ORDER BY rand() limit 1");

//print_r ($pergunta);

$pergunta = selecionar("SELECT idPergunta, descricaoPergunta FROM pergunta ORDER BY rand() limit 1");

//print_r ($pergunta);

$arrayPergunta = selecionar("SELECT * FROM pergunta");

$idpergunta = $pergunta[0]["idPergunta"];

$alternativas = selecionar("SELECT descricaoAlternativa, opcaoCorreta FROM alternativa WHERE pergunta_idPergunta = $idpergunta ");

offconexao();

//echo $idpergunta;

//print_r ( $alternativas );

//print_r ($arrayPergunta);



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
}

print_r($idPergunta);
echo $random;

//echo $pergunta["descricaoPergunta"];
*/

header("Location: ../../interacaoJogo/telaPergunta.php");
?>
</pre>