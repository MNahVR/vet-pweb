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
    <a href="views/vet/cadVet.php">Cadastro de veterinário</a> |
    <a href="views/vet/loginVet.php">Login de veterinário</a>
  </p>

  <h1>Cadastro de cliente</h1>
  
  <form action="" method="POST" onsubmit="cadCliente(event)">
    <label>Nome completo:<br>
      <input type="text" placeholder="Seu nome" name="name" required>
    </label>
    <br> <br>

    <label>E-mail:<br>
      <input type="email" placeholder="Seu melhor e-mail" name="email" required>
    </label>
    <br> <br>
    
    <label>Senha:<br>
      <input type="password" placeholder="Sua senha" name="password" required>
    </label>
    <br> <br>
    
    <button type="submit">Criar Conta</button>
    <br> <br>
    
    <p>Se já tiver conta <a href="./views/usuario/loginCliente.php">Faça login</a>.</p>
  </form>

  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="scripts/cadCliente.js"></script>
</body>
</html>