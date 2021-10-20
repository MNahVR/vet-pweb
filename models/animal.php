<?php

require_once 'animal.php';

class Animal extends Pet {
  public function __construct($id, $age = null, $name = null, $race = null, $decease = null) {
    parent::__construct($age, $race, $name,$decease, $id);
  }
}