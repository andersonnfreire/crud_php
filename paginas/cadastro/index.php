<?php
//BUSCANDO A CLASSE
require_once "../../classes/Funcionario.php";
require_once "../../classes/Funcoes.php";
//ESTANCIANDO A CLASSE
$objFunc = new Funcionario();
$objFc = new Funcoes();

//CADASTRANDO O FUNCIONARIO
if (isset($_POST['btCadastrar'])) {
    if ($objFunc->queryInsert($_POST) == 'ok') {
        header('location: ../cadastro/');
    } else {
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
}

//SELECIONADO O FUNCIONARIO
if(isset($_GET['acao'])){
	if($_GET['acao'] == "edit"){
		$func = $objFunc->querySeleciona($_GET['func']);
	}
}

//ALTERANDO OS DADOS DO FUNCIONARIO
if(isset($_POST['btAlterar'])){
	if($objFunc->queryUpdade($_POST) == 'ok'){
		//header('location: ?acao=edit&func='.$_GET['func']);
                header('location: ../listar/');
	}else{
		echo '<script type="text/javascript">alert("Erro em atualizar");</script>';
	}
}
//BUSCANDO AS CLASSES
require_once '../../classes/Funcionario.php';
//ESTANCIANDO
$objFunc = new Funcionario();
//VALIDANDO USUARIO
session_start();
if ($_SESSION["logado"] == "sim") {
    $objFunc->funcionarioLogado($_SESSION['func']);
} else {
    header ('location: http://localhost/sistemaPHP');
}

if (isset($_GET['sair']) == "sim") {
    $objFunc->sairFuncionario();
}

?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        
        <title>Formulário de cadastro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        
        


    </head>
    <body>
        <div class="row">
            <div class="nav-wrapper deep-purple darken-2">

                <nav>
                    <div class="nav-wrapper">

                        <a href="../home/" class="brand-logo">Logo</a>

                        <a data-target="mobile-navbar" class="sidenav-trigger">
                            <i class="material-icons">menu</i>
                        </a>

                        <ul class="right hide-on-med-and-down">
                            <!-- Dropdown Trigger -->
                            <li>
                                <a class="dropdown-trigger" data-target="dropdown1" href="#plan">Funcionario
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                            </li>
                        </ul>
                        <ul id="dropdown1" class="dropdown-content nesteded">
                            <li><a href="../cadastro/">Cadastrar</a></li>
                            <li><a href="../listar/">Listar</a></li>
                        </ul>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#"><?= $_SESSION['nome'] ?> <i class="material-icons">account_circle</i></a></li>
                            <li><a href="?sair=sim"> Sair <i class="material-icons">backspace</i></a></li>
                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <ul id="mobile-navbar" class="sidenav">
            <li><a class="dropdown-trigger" data-target="dropdown2" href="#plan">Funcionario
                    <i class="material-icons right">arrow_drop_down</i>
                </a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content nesteded">
            <li><a href="../cadastro/">Cadastrar</a></li>
            <li><a href="../listar/">Listar</a></li>
        </ul>

        <div class="row container">
            <center>
                <div class="form-control">

                    <form class="col s12" name="formCad" action="" method="post">

                        <input class="form-control" name="nome" type="text" required="required"  placeholder="Nome:" value="<?= $objFc->tratarCaracter((isset($func['nome'])) ? ($func['nome']) : (''), 2) ?>"><br>        
                        <input type="email" name="email" class="form-control" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"  placeholder="E-mail:" value="<?= $objFc->tratarCaracter((isset($func['email'])) ? ($func['email']) : (''), 2) ?>"><br>
                        <?php if (isset($_GET['acao']) <> 'edit') { ?>
                            <input type="password" name="senha" class="form-control" required="required" placeholder="Senha:"><br>
                        <?php } ?>
                        <button type="submit" name="<?= (isset($_GET['acao']) == 'edit') ? ('btAlterar') : ('btCadastrar') ?>" class="btn btn-primary btn-block"><?= (isset($_GET['acao']) == 'Editar') ? ('Alterar') : ('Cadastrar') ?></button>   
                         <input type="hidden" name="func" value="<?=(isset($func['idFuncionario']))?($objFc->base64($func['idFuncionario'], 1)):('')?>">
                    </form>

                </div>
            </center>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l12 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2014 Copyright Text
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
        <script type="text/javascript" src="../../js/teste.js"></script>
        

    </body>
</html>
