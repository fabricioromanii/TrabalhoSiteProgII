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

<br>
<br>
<br>
<br>
<br>
<br>

  <div class="logo-pizza"><img title="Logo da pizzaria" src="../img/Logo2.jpg" /></div>

  <form method="../index.php" onsubmit="">
    <div class="container-login">
      <input type="text" id="login" placeholder="Login" name="username" required>
      <input type="password" id="password" placeholder="Senha" name="password" required>
      <button class="button-form" type="submit" onclick="check_login()">Login</button>
      <div class="login-a"><a href="login-cadastro.php">Cadastrar novo usuario</a></div>
    </div>
  </form>

  <script src="../js/index.js"></script>

</body>

</html>