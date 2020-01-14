<?php
//BUSCANDO A CLASSE
require_once "../../classes/Funcionario.php";
require_once "../../classes/Funcoes.php";
//ESTANCIANDO A CLASSE
$objFunc = new Funcionario();
$objFc = new Funcoes();

//SELECIONADO O FUNCIONARIO
if(isset($_GET['acao'])){
	switch($_GET['acao']){
		case 'edit': 
                    $func = $objFunc->querySeleciona($_GET['func']); 
                    header("location: ../cadastro/?acao=edit&func= {$objFc->base64($func['idFuncionario'],1)}");
                    break;
                
	}
}


?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
        <title>Listagem de Funcionários</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
        <script type="text/javascript" src="js/teste.js"></script>



    </head>
    <body>
        <div class="row">
            <div class="s12">
                <!-- Dropdown Structure -->
                <ul id="dropdown1" class="dropdown-content">
                    <li><a href="../cadastro/">Cadastrar</a></li>
                    <li><a href="../listar/">Listar</a></li>
                </ul>
                <nav>
                    <div class="nav-wrapper">
                        <a href="../home/" class="brand-logo">Logo</a>
                        <ul id="nav-mobile" class="right hide-on-med-and-down">
                            <!-- Dropdown Trigger -->
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Funcionario<i class="material-icons right"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row container">
            <center>
                <div class="form-control">

                    <table  class="responsive-table" >
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Ações </th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($objFunc->querySelect() as $rst) { ?>
                                <tr>
                                    <td><?= $objFc->tratarCaracter($rst['nome'], 2) ?></td>
                                    <td><a class="material-icons" href="?acao=delet&func=<?= $objFc->base64($rst['idFuncionario'],1) ?>">delete</a></td>
                                    <td><a class="material-icons" href="?acao=edit&func=<?= $objFc->base64($rst['idFuncionario'],1) ?>">edit</a>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                </div>
            </center>
        </div>
    </body>
</html>
