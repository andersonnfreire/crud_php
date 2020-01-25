<?php 

//BUSCANDO AS CLASSES
require_once 'classes/Funcionario.php';
//ESTANCIANDO A CLASSES
$objFunc = new Funcionario();
//FAZENDO O LOGIN
if(isset($_POST['btLogar'])){
	$objFunc->logarFuncionario($_POST);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/teste.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!------ Include the above in your HEAD tag ---------->
        <title>Bootstrap 4 Login/Register Form</title>
    </head>
    <body>
        <div id="logreg-forms">
            <form class="form-signin" action="" method="post">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Iniciar Sessão</h1>
                <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus="">
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Password" required="">
                <hr>
                <button class="btn btn-success btn-block" name="btLogar" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
<!--                <a href="#" id="forgot_pswd">Forgot password?</a>-->
                

            <?php if(!empty($_GET['login']) == 'error') : ?>
            <div class="alert alert-danger" role="alert">
                Ops! E-mail ou Senha estão errado!
            </div>
            <?php endif; ?>
        </div>
    </body>
</html>