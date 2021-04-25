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

        <form method="POST" id="register-form" onsubmit="return check_register()">
            <div>
                <i class="fa fa-file"></i>
                <input type="text" id="name_register" name="field_name" placeholder="Nome Completo" >
            </div>

            <div>
                <i class="fa fa-file"></i>
                <input type="email" id="email_register" name="field_email" placeholder="E-mail"><br>
            </div>

            <div id="birth-date">
                <i class="fa fa-file"></i>
                <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthDate_register" name="field_birth" placeholder="Data de Nascimento"><br>
            </div>

            <div> 
                <i class="fa fa-file"></i>
                <input type="password" id="password_register" name="field_password" placeholder="Senha"><br>
            </div>

            <div> 
                <i class="fa fa-file"></i>
                <input type="password" id="confirm-password_register" name="field_confirm-password" placeholder="Confirme sua senha"><br>
            </div>

            <div > 
                <i class="fa fa-file"></i>
                <input type="text" id="bairro_register" name="field_bairro" placeholder="Bairro"><br>
            </div>

            <div> 
                <i class="fa fa-file"></i>
                <input type="text" id="address_register" name="field_address" placeholder="Endereço (Rua - Nº)"><br>
            </div>

            <div >
                <label>
                    <input type="checkbox" name="field_promo1" value="sim">
                    Quero receber e-mails com novidades.
                </label>
            </div>
        
            <div id="buttons">
                <div id="btn-register">
                    <input type="submit" value="Cadastrar"> <br>
                </div>

                <div id="btn-clear">
                    <input type="reset" value="Limpar Dados"><br>
                </div>
            </div>
            <hr>
            <a href="login.php">Já possuo cadastro</a>
        </form>
    </div>
    <script src="js/index.js"></script>

</body>