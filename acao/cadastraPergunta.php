<pre>
<?php
include "../bancoOuterSpace/banco.php";

$dados = $_POST;

unset($dados["tema"]);

$opcaoCorreta = $dados["resposta"];
unset($dados["resposta"]);

$pergunta = array("descricaoPergunta" => $dados["pergunta"]);
unset($dados["pergunta"]);

$alternativa = $dados;

onConexao();

$id = inserir('pergunta', $pergunta);

foreach($alternativa as $chave => $valor) {
       if($chave == $opcaoCorreta) {
            $certa = array("descricaoAlternativa" => $valor, "opcaoCorreta" => 1, "pergunta_idPergunta" => $id);
            inserir('alternativa', $certa);
            unset($alternativa[$chave]);
       }else {
           $errada = array("descricaoAlternativa" => $valor, "opcaoCorreta" => 0, "pergunta_idPergunta" => $id);
           inserir('alternativa', $errada);
       }
}

offConexao();

header("Location: ../paginas/pagsAdm/cadastraTema.php?msg=1");
?>
</pre>

