<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once 'models/veterinario.php';
require_once 'DAO/vetDao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$veterinario = new Veterinario($email, $password, $name);
$vetDao = new VetDao();

if ($vetDao->get($veterinario) == null) {
  $vetDao->create($veterinario);

  $response = array(
    'success' => true,
    'usuario' => array(
      'email' => $email,
      'name' => $name,
    ),
  );

  echo json_encode($response);
} else {
  $response = array('success' => false);
  echo json_encode($response);
}