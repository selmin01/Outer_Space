<pre>
<?php
include "../bancoOuterSpace/banco.php";

$dados = $_POST;

$tema = $dados["tema"];
unset($dados["tema"]);

$pergunta = $dados["pergunta"];
unset($dados["pergunta"]);

$alternativa = $dados;

onConexao();

inserir('tema', $tema);
inserir('pergunta', $pergunta);

offConexao();
print_r($alternativa);
?>
</pre>