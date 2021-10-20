<?php

require_once 'models/cliente.php';
require_once 'models/conexao.php';

class ClienteDao {
  public function create(Cliente $cliente) {
    $sql = 'INSERT INTO clientes (name, email, password) VALUES (?, ?, ?)';

    $statement = Conexao::getConexao()->prepare($sql);
    
    $statement->bindValue(1, $client->getName());
    $statement->bindValue(2, $client->getEmail());
    $statement->bindValue(3, $client->getPassword());
    $statement->execute();
  }

  public function get(Cliente $cliente) {
    $sql = 'SELECT * FROM clientes WHERE email = ?';

    $statement = Conexao::getConexao()->prepare($sql);

    $statement->bindValue(1, $cliente->getEmail());
    $statement->execute();

    if ($statement->rowCount() > 0) {
      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    return null;
  }
}