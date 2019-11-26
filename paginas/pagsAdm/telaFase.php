<?php
include "../../acao/navbar.php";
include "../../acao/persistenciaGrupo.php";
?>
<html>
	<head>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../estilo/css/cadastroFase.css">
        <link href="https://fonts.googleapis.com/css?family=Orbitron&amp;display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>    
    </head>
    <body>
		<div class="container">
            <form action="../../acao/cadastraFase.php" method="post">
                <div class="row">
                    <div class="col-md-4 mt-2 mx-auto font">
                       <center><div class="mx-auto titulo"><h2>Cadastro de Fase</h2></div></center>
                    </div>
                    <div class="col-md-12" >
                        <div class="mx-auto" style="width: 300px;">
                        <center>
                            <div class="form-group">
                                <label for="formGroupExampleInput"><h5 class="font ">Velocidade da Nave</h5></label>
                                <select name="velocidadeNave" class="form-control" required="">
                                    <option value=""> -- </option>
                                    <option value="1">200</option>
                                    <option value="2">400</option>
                                    <option value="3">600</option>
                                    <option value="4">800</option>
                                    <option value="5">1000</option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-form-label"><h5 class="font">Quantidade de meteoros</h5></label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" max="100" maxlength="3" name="qtdMeteoro" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12 col-form-label"><h5 class="font">Tempo da Fase</h5></label>
                                <div class="col-sm-6 md-12">
                                    <input type="time" class="form-control" name="tempo" min="00:01:00" max="00:30:00" required="">
                                <br>
                                </div>
                            </div>
                        </div>
                    </center>
                    </div>
                    <div class="col-md-4 botoes">
                        <a class="linkbtn" href="menuAdm.php">
                            <button type="submit" class="btn btn-dark btn-lg btn-block font">Cadastrar</button>
                        </a>
                        <a class="linkbtn col-md-2" href="menuAdm.php">
                            <button type="button" class="btn btn-dark btn-lg btn-block font">Voltar</button>
                        </a>
                    </div>
                </div>           
            </form>
        </div>
	</body>
</html>
