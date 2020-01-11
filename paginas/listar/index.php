<?php ?>
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
                                <th>Item Name</th>
                                <th>Item Price</th>
                                <th>Ações </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Alvin</td>
                                <td>Eclair</td>
                                <td>$0.87</td>
                                <td><i class="material-icons">edit</i></td>
                                <td><i class="material-icons">delete</i></td>
                            </tr>
                            <tr>
                                <td>Alan</td>
                                <td>Jellybean</td>
                                <td>$3.76</td>
                                <td><i class="material-icons">edit</i></td>
                                <td><i class="material-icons">delete</i></td>
                            </tr>
                            <tr>
                                <td>Jonathan</td>
                                <td>Lollipop</td>
                                <td>$7.00</td>
                                <td><i class="material-icons">edit</i></td>
                                <td><i class="material-icons">delete</i></td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </center>
        </div>
    </body>
</html>
