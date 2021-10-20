<?php

require_once 'models/cliente.php';
require_once 'models/conexao.php';

class ClienteDao {
  public function create(Cliente $cliente) {
    $sql = 'INSERT INTO clientes (name, email, password) VALUES (?, ?, ?)';

    $statement = Conexao::getConexao()->prepare($sql);
    
    $statement->bindValue(1, $cliente->getName());
    $statement->bindValue(2, $cliente->getEmail());
    $statement->bindValue(3, $cliente->getPassword());
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