<?php
//BUSCANDO A CLASSE
require_once "../../classes/Funcionario.php";
require_once "../../classes/Funcoes.php";
//ESTANCIANDO A CLASSE
$objFunc = new Funcionario();
$objFc = new Funcoes();

//REDIRECIONA O FUNCIONARIO PARA EDITAR OU DELETAR
if (isset($_GET['acao'])) {
    switch ($_GET['acao']) {
        case 'edit':
            $func = $objFunc->querySeleciona($_GET['func']);
            header("location: ../cadastro/?acao=edit&func= {$objFc->base64($func['idFuncionario'], 1)}");
            break;
        case 'delet':
            if ($objFunc->queryDelete($_GET['func']) == 'ok') {
                header('location: ../listar');
            } else {
                echo '<script type="text/javascript">alert("Erro em deletar");</script>';
            }
            break;
    }
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">   
        <title>Listagem de Funcionários</title>
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
                                    <td><a class="material-icons" href="?acao=delet&func=<?= $objFc->base64($rst['idFuncionario'], 1) ?>">delete</a></td>
                                    <td><a class="material-icons" href="?acao=edit&func=<?= $objFc->base64($rst['idFuncionario'], 1) ?>">edit</a>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>


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
