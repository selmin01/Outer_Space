<?php


include("../../acao/navbar.php")

?>
<html>
	<head>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../estilo/css/cadastroTema.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron&amp;display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    

	<body>
		<div class="container">
            <form action="../../acao/cadastraFase.php" method="post">
                <div class="row">
                    <div class="col-md-12 mt-4 md-6 mx-auto font">
                        <div class="mx-auto" style="width: 350px;"><h2>Cadastro de Fase</h2></div>
                    </div>
                    <div class="col-md-6 boxTema">
                        <div class="form-group ">
                            <label for="formGroupExampleInput"><h5 class="font">Velocidade da Nave</h5></label>
                            <select name="tema" class="form-control" required="">
                                <option value=""> -- </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
								<option value="3">3</option>
                                <option value="4">4</option>
								<option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h5 class="font">Quantidade de meteoros</h5></label>
                            <input type="number" >
                        </div>
                    </div>
                    
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark btn-lg btn-block font">Cadastrar</button> 
                    </div>
                </div>           
            </form>
            <a class="linkbtn" href="menuAdm.php">
                <button type="button" class="btn btn-dark btn-lg btn-block font">Voltar</button>
            </a> 
        </div>
	</body>
</html>
// Matriz com todos os participantes
$participantes = array("Rafael", "João", "Maria", "Pedro", "Patricia", "Camila", "Roberto");
 
// Definindo o número de participantes
$numParticipantes = sizeof($participantes);
 
// Informações adicionais
$chances = round((1 / $numParticipantes) * 100);
echo "- Temos no total <b>".$numParticipantes."</b> participantes; <br />";
echo "- Cada participante teve <b>".$chances."%</b> de chance de ganhar; <br /><br />";
 
// Sorteando
 
# Primeiro ganhador
$sorteado[1] = $participantes[rand(0,$numParticipantes - 1)];
 
# Segundo ganhador
for ($i = 1; $i < 2; $i++) {
	$sorteado[2] = $participantes[rand(0,$numParticipantes - 1)];
	// Caso o ganhador já tenha saido, sorteia novamente.
	if ($sorteado[2] == $sorteado[1]) {
		--$i;
	}
}
 
# Terceiro ganhador
for ($i = 1; $i < 2; $i++) {
	$sorteado[3] = $participantes[rand(0,$numParticipantes - 1)];
	// Caso o ganhador já tenha saido, sorteia novamente.
	if ($sorteado[3] == $sorteado[1] || $sorteado[3] == $sorteado[2]) {
		--$i;
	}
}
 
// Exibindo ganhadores
echo "<b>Ganhadores:</b> <br />";
echo "<b>1°</b> - " . $sorteado[1] . "<br />";
echo "<b>2°</b> - " . $sorteado[2] . "<br />";
echo "<b>3°</b> - " . $sorteado[3] . "<br />";

?>

