<?php

include("../../acao/navbar.php")

?>
<html>
	<head>
        <link rel="stylesheet" href="../../estilo/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../estilo/css/cadastroFase.css">
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
                            <select name="velocidadeNave" class="form-control vel" required="">
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
                            <input type="number" class="meteoro" name="qtdMeteoro">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput"><h5 class="font">Tempo da Fase (Em Minutos)</h5></label>
                            <input type="time" class="tempo" name="tempo" min="00:01:00" max="00:30:00">
                        </div>
                    </div>
                    
                    </div>
                        <div class="col-md-12">
                        <button type="submit" class="btn btn-dark btn-lg btn-block font">Cadastrar</button> 
                    </div>
                </div>           
            </form>
            <a class="linkbtn col-md-12" href="menuAdm.php">
                <button type="button" class="btn btn-dark btn-lg btn-block font">Voltar</button>
            </a> 
        </div>
	</body>
</html>
