
<?php

class Pet {
  private $id;
  private $name;
  private $race;
  private $age;
  private $decease;
  
  public function __construct($race = null, $id, $name = null, $decease = null, $age = null) {
    $this->name = $name;
    $this->setId($id);
    $this->race = $race;
    $this->age = $age;
    $this->decease = $decease;
  }

  public function getName() {
    return $this->name;
  }

  public function getId() {
    return $this->id;
  }

  public function setId($email) {
    $this->id = filter_var($id, FILTER_SANITIZE_ID);
  }

  public function getRace() {
    return $this->race;
  }

  public function getAge() {
    return $this->age;
  }

  public function getDecease() {
    return $this->decease;
  }
}