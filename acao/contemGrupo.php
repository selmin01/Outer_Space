<?php
session_start();
include "../bancoOuterSpace/banco.php";
if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
    $nick = $usuario["nick"];
}
onConexao();
$id_usuario = $usuario["idUsuario"];
//print_r($dados_usuario);
echo $id_usuario;
$grupo = selecionar("SELECT * FROM usuariogrupo WHERE usuario_idUsuario = '$id_usuario'");
//print_r($grupo);
offConexao();
$usuario_idUsuario = $grupo[0]["usuario_idUsuario"];
echo $usuario_idUsuario;
if($id_usuario==$usuario_idUsuario){
    header ("Location: ../paginas/auxGrupo/dadosGrupo.php");
}else{
    header ("Location: ../paginas/Grupo.php?msg=1");
}
?>