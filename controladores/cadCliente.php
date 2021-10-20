<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json;charset=utf-8");

require_once 'models/cliente.php';
require_once 'DAO/clienteDao.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$cliente = new Cliente($email, $password, $name);
$clienteDao = new ClienteDao();

if ($clienteDao->get($cliente) == null) {
  $clienteDao->create($cliente);

  $response = array(
    'success' => true,
    'user' => array(
      'email' => $email,
      'name' => $name,
    ),
  );

  echo json_encode($response);
} else {
  $response = array('success' => false);
  echo json_encode($response);
}