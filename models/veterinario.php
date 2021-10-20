<?php

require_once 'usuario.php';

class Veterinario extends Usuario {
  public function __construct($email, $password = null, $name = null) {
    parent::__construct($password, $email, $name);
  }
}