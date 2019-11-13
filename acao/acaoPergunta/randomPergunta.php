<pre>
<?php

include "../../bancoOuterSpace/banco.php";

onConexao();

$arrayPergunta = selecionar("SELECT * FROM pergunta");

offconexao();

print_r ($arrayPergunta);

foreach($arrayPergunta as $array) {
    foreach($array as $chave => $valor) {
        if($chave == "idPergunta") {
            $idPergunta[] = $valor;
        }
    }
    $random = array_rand($idPergunta, 1);

    foreach($array as $chave => $valor) {
        if($chave == "idPergunta" && $valor == $random) {
            $pergunta[] = $chave[$valor];
        }
    }
}

print_r($idPergunta);
echo $random;

print_r($pergunta);
?>
</pre>