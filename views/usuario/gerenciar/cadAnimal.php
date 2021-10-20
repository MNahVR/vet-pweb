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
      <a href="views/usuario/gerenciar/homeGerenciar">Voltar</a>
    </p>
    <h1>Cadastro do pet</h1>
    <form action="" method="POST" onsubmit="cadVet(event)">
      <label>
        ID:<br>
        <input type="number" placeholder="Id do pet" name="id" required>
      </label>
      <br>
      <br>
      <label>
        Nome:<br>
        <input type="text" placeholder="Nome do pet" name="name" required>
      </label>
      <br>
      <br>
      <label>
        Raça:<br>
        <input type="text" placeholder="Raça do pet" name="race" required>
      </label>
      <br>
      <br>
      <label>
        idade:<br>
        <input type="number" placeholder="Idade do pet" name="age" required>
      </label>
      <br>
      <br>
      <label>
        Doenças:<br>
        <input type="text" placeholder="Digite caso o pet tenha doenças" name="decease" required>
      </label>
      <br>
      <br>     
      <button type="submit">Criar Conta</button>
      <br>
      <br>
    </form>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="scripts/cadAnimal.js"></script>
  </body>
</html>