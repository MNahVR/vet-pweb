<?php

require_once 'animal.php';

class Pet extends Animal {
  public function __construct($id, $age = null, $name = null, $race = null, $decease = null) {
    parent::__construct($age, $race, $name,$decease, $id);
  }
}