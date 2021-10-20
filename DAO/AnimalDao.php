<?php

require_once 'models/animal.php';
require_once 'models/conexao.php';

class ClienteDao {
  public function create( $animal) {
    $sql = 'INSERT INTO animais (id, name, race, age, decease) VALUES (?, ?, ?, ?, ?';

    $statement = Conexao::getConexao()->prepare($sql);
    
    $statement->bindValue(1, $animal->getId());
    $statement->bindValue(2, $animal->getName());
    $statement->bindValue(3, $animal->getRace());
    $statement->bindValue(4, $animal->getAge());
    $statement->bindValue(5, $animal->getDecease());
    $statement->execute();
  }

  public function get(Animal $animal) {
    $sql = 'SELECT * FROM animais WHERE id = ?';

    $statement = Conexao::getConexao()->prepare($sql);

    $statement->bindValue(1, $animal->getId());
    $statement->execute();

    if ($statement->rowCount() > 0) {
      return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    
    return null;
  }
}