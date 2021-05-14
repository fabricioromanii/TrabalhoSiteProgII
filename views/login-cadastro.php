<?php require_once("includes/header.php");?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="/img/iconeParaONavegador.png">

  <meta name="author" content="Fabrício Romani">
    <meta name="description" content="Exemplos de Site de Pizzaria">    
    <meta name="keywords" content="pizza, entrega, pizzaria">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/login.css">

  <title>Login</title>

</head>

<body>
    <div class="logo-pizza"><img title="Logo da pizzaria" src="../img/Logo2.jpg" /></div>

    <form method="../index.php" onsubmit="">
        <div class="container-login">
            <input type="text" id="name_register" name="field_name" placeholder="Nome Completo" required >
            <input type="email" id="email_register" name="field_email" placeholder="E-mail" required>
            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthDate_register" name="field_birth" placeholder="Data de Nascimento" required>
            <input type="password" id="password_register" name="field_password" placeholder="Senha" required>
            <input type="password" id="confirm-password_register" name="field_confirm-password" placeholder="Confirme sua senha" required>
            <input type="text" id="bairro_register" name="field_bairro" placeholder="Bairro" required>
            <input type="text" id="address_register" name="field_address" placeholder="Endereço (Rua - Nº)" required>
            <button type="submit" value="Cadastrar" onclick="check_register()">Cadastrar</button>    
            <div class="login-a"><a href="login.php">Login</a></div>
        </div>
    </form>

    <script src="../js/index.js"></script>

</body>