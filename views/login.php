<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="/img/mst.png">

  <meta name="author" content="Fabrício Romani">
    <meta name="description" content="Exemplos de Site de Pizzaria">    
    <meta name="keywords" content="pizza, entrega, pizzaria">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/login.css">

  <title>Login</title>

</head>

<body>

  <div class="logo-pizza"><img title="Logo da pizzaria" src="../img/Logo2.jpg" /></div>

  <form  action="../index.php" onsubmit="">
    <div class="container-login">
      <input type="text" placeholder="Login" name="username" required>
      <input type="password" placeholder="Senha" name="password" required>
      <button class="button-form" type="submit">Login</button>
      <div class="login-a"><a href="login-cadastro.php">Cadastrar novo usuario</a></div>
    </div>
  </form>

  <script src="/js/login.js"></script>

</body>

</html>