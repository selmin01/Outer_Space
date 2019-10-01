<pre>
<?php
include "../bancoOuterSpace/banco.php";

$dados = $_POST;
print_r($dados);

$opcaoCorreta = $dados["select"];
unset($dados["select"]);
echo $opcaoCorreta;

$pergunta = $dados["pergunta"];
echo $pergunta;
unset($dados["pergunta"]);

$alternativa = $dados;
print_r($alternativa);

$teste = array_keys($alternativa);
print_r($teste);

foreach($alternativa as $chave => $valor) {
       if($chave == $opcaoCorreta) {
           echo $valor;
       }
}
/*
onConexao();

inserir('tema', $tema);
inserir('pergunta', $pergunta);

offConexao();
*/
?>
</pre>

