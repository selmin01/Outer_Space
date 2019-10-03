<?php

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