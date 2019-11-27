<?php
session_start();
include "../../bancoOuterSpace/banco.php";

if(isset($_SESSION["usuario"])){
    $usuario = $_SESSION["usuario"];
    $idUsuario = $usuario["idUsuario"];
    $nick = $usuario["nick"];
    $pont = $_REQUEST["pont"];
   
    onConexao();
    $arrayPonto = selecionar("SELECT maxPonto, pontos FROM usuario WHERE idUsuario = '$idUsuario'");
    $maxPonto = $arrayPonto[0]["maxPonto"];
    $auxPont = $arrayPonto[0]["pontos"];
    
    if($maxPonto<$pont){
        $maxPonto=$pont;
    }
    //$pont+=$auxPont;
    $auxPont+=$pont;
    $dados= array("idUsuario"=>$idUsuario,"maxPonto"=>$maxPonto,"pontos"=>$auxPont);
    alterar("usuario",$dados,"idUsuario=".$idUsuario);

    $idGrupo = selecionar("SELECT grupo_idGrupo FROM usuariogrupo WHERE usuario_idUsuario = '$idUsuario'");
    print_r($idGrupo);
    if($idGrupo!=NULL){
        $id_grupo=$idGrupo[0]["grupo_idGrupo"];
        $pontogrupo =selecionar("SELECT ponto FROM rankinggrupo WHERE grupo_idGrupo = '$id_grupo'");
        $auxPontGrupo = $pontogrupo[0]["ponto"];
        echo "pontooooo:".$pont;
        $auxPontGrupo+=$pont;
        $dadosGrupo= array("ponto"=>$auxPontGrupo);
        alterar("rankinggrupo",$dadosGrupo,"usuario=".$nick);

        //$arrayPontoGrupo=array("idUsuario"=>$usu_grupo,"maxPonto"=>$maxPonto,"pontos"=>$pont);


    }

    offConexao();
}
?>