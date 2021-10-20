<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once 'models/animal.php';
require_once 'DAO/animalDao.php';

$id = $_POST['id'];
$name = $_POST['name'];
$race = $_POST['race'];
$age = $_POST['age'];
$decease = $_POST['decease'];

$animal = new Animal($id, $name, $race, $age, $decease);
$animalDao = new AnimalDao();

if ($animalDao->get($animal) == null) {
  $animalDao->create($animal);

  $response = array(
    'success' => true,
    'usuario' => array(
      'id' => $id,
      'name' => $name,
    ),
  );

  echo json_encode($response);
} else {
  $response = array('success' => false);
  echo json_encode($response);
}