<pre>
<?php

include "../../bancoOuterSpace/banco.php";

onConexao();

$arrayPergunta = selecionar("SELECT * FROM pergunta");

offconexao();

print_r ($arrayPergunta);

foreach($arrayPergunta as $chave => $valor){
    
    print_r ($chave);
}
?>
</pre>