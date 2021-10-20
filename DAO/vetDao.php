<?php

require_once 'models/veterinario.php';
require_once 'models/conexao.php';

class VetDao {
  public function create(Veterinario $veterinario) {
    $sql = 'INSERT INTO veterinarios (name, email, password) VALUES (?, ?, ?)';

    $statement = Conexao::getConexao()->prepare($sql);
    
    $statement->bindValue(1, $veterinario->getName());
    $statement->bindValue(2, $veterinario->getEmail());
    $statement->bindValue(3, $veterinario->getPassword());
    $statement->execute();
  }

  public function get(Veterinario $veterinario) {
    $sql = 'SELECT * FROM veterinarios WHERE email = ?';

    $statement = Conexao::getConexao()->prepare($sql);

    $statement->bindValue(1, $veterinario->getEmail());
    $statement->execute();

    if ($statement->rowCount() > 0) {
      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    return null;
  }
}