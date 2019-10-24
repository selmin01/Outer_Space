<?php
include "../bancoOuterSpace/banco.php"
session_start();

$id_Usuario = $_POST["id"];



onConexao();
$usuario = selecionar("SELECT * FROM usuario WHERE nick = '$nick' and maxPonto = 'maxPonto'");

offConexao();
$query = mysql_query("SELECT * FROM ranking ORDER BY ponto Desc Limit 10")



?>