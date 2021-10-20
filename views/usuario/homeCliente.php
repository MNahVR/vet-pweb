<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Site veterinário</title>
</head>

<body>
  <p>
    <a href="views/usuario/loginCliente.php">Sair</a>
  </p>
  
  <?php

    if (isset($_GET['name'])) {
      echo '<h1>Olá, '.$_GET['name'].'!</h1>';
    } else {
      echo '<h1>Olá, tudo bem?</h1>';
    }

  ?>

    <p>
        <a href="views/gerenciar/homeGerenciar.php">Gerenciar Próprios Animais</a>
    </p>
</body>
</html>