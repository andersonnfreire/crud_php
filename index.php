<?php
//BUSCANDO AS CLASSES
require_once 'classes/Funcionario.php';
//ESTANCIANDO A CLASSES
$objFunc = new Funcionario();
//FAZENDO O LOGIN
if (isset($_POST['btLogar'])) {
    $objFunc->logaFuncionario($_POST);
}
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/teste.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="/style.css">
        <title>Bootstrap 4 Login/Register Form</title>
    </head>
    <body>
        <div id="logreg-forms">
            <form class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Iniciar Sessão</h1>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus="">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">

                <button class="btn btn-success btn-block" name="btLogar" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
                <a href="#" id="forgot_pswd">Forgot password?</a>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
            </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>

            <form action="/signup/" class="form-signup">
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Preencha os dados</h1>
                <input type="text" id="user-name" class="form-control" placeholder="Full name" required="" autofocus="">
                <input type="email" id="user-email" class="form-control" placeholder="Email address" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autofocus="">
                <input type="password" id="user-pass" class="form-control" placeholder="Password" required autofocus="">
                <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" required autofocus="">

                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
            <?php if (isset($_GET["login"]) == "error") { ?>
                <div class="alert alert-danger alert-block alert-aling" role="alert">Ops! E-mail ou Senha estão errado</div>
            <?php } ?>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/script.js"></script>
    </body>
</html>