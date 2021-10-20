<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once 'models/veterinario.php';
require_once 'DAO/vetDao.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$veterinario = new Veterinario($email, $password);
$vetDao = new VetDao();

$vetData = $vetDao->get($veterinario);
$vetIsInDatabase = $vetData != null;
$passwordIsCorrect = $vetData[0]['password'] == $password;

if ($vetIsInDatabase && $passwordIsCorrect) {
  echo json_encode(array(
    'success' => true,
    'user' => array(
      'id' => $vetData[0]['id'],
      'email' => $email,
      'name' => $vetData[0]['name']
    )
  ));
} else {
  echo json_encode(array('success' => false));
}