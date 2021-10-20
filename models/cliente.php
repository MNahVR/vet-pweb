<?php

require_once 'usuario.php';

class Cliente extends Usuario {
  public function __construct($email, $password = null, $name = null) {
    parent::__construct($password, $email, $name);
  }
}