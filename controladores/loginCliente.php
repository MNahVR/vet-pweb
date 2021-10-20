<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once 'models/cliente.php';
require_once 'DAO/clienteDao.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

$cliente = new Cliente($email, $password);
$clienteDao = new ClienteDao();

$clienteData = $clienteDao->get($cliente);
$clienteIsInDatabase = $clienteData != null;
$passwordIsCorrect = $clienteData[0]['password'] == $password;

if ($clienteIsInDatabase && $passwordIsCorrect) {
  echo json_encode(array(
    'success' => true,
    'user' => array(
      'id' => $clienteData[0]['id'],
      'email' => $email,
      'name' => $clienteData[0]['name']
    )
  ));
} else {
  echo json_encode(array('success' => false));
}