<pre>
<?php
include "../bancoOuterSpace/banco.php";

$dados = $_POST;

print_r($dados);

onConexao();

inserir('fase', $dados);

$perguntas = selecionar("SELECT * FROM pergunta");

print_r($perguntas);
?>
</pre>