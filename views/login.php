<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Fabrício Romani">
    <meta name="description" content="Exemplos de Site de Pizzaria">
    <meta name="keywords" content="pizza, entrega, pizzaria">
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/IconeParaONavegador.png" type="image/x-icon" />
    <title>Pizzaria Los Hermanos</title>

</head>

<body>

    <div class="login">

        <h1>LOGIN</h1>

        <form method="POST" id="login-form" onsubmit="return check_login()">
            <div>
                <i class="fa fa-file"></i>
                <input type="email" id="email_login" name="field_email" placeholder="E-mail"><br>
            </div>
            <div> 
                <i class="fa fa-file"></i>
                <input type="password" id="password_login" name="field_password" placeholder="Senha"><br>
            </div>
            <div id="buttons" class="buttons">
                <input type="submit" value="Entrar"> <br>
            </div>
            <a class="form-a" href="login-cadastro.php">Faça seu Cadastro</a>
        </form>

    </div>
    <script src="js/index.js"></script>

</body>