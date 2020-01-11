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
        header('location: /paginas/cadastro');
    } else {
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
        <title>Formulário de cadastro</title>
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
                    <li><a href="../cadastro/">Funcionario</a></li>
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

                    <form class="col s12" name="formCad" action="" method="post">

                        <div class="row">
                            <div class="input-field s6">
                                <input placeholder="Placeholder" id="first_name" type="text" class="validate">
                                <label for="first_name">First Name</label>
                            </div>
                            <div class="input-field s6">
                                <input id="last_name" type="text" class="validate">
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field s12">
                                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                                <label for="disabled">Disabled</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field s12">
                                <input id="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field s12">
                                <input id="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="row">
                            <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">+</i></a>
                        </div>    
                    </form>

                </div>
            </center>
        </div>

        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
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
    </body>
</html>
