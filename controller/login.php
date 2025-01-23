<?php

require_once __DIR__ .'/../model/connectaDb.php';
require_once __DIR__ .'/../model/procesar_login.php';

$conn = conectaBD();


//If se ha enviado el formulario entonces entro a ... sino cargo la vista. 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST['mail'];
  $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

  $contrasenya = $_POST['contrasenya'];
  $isContrasenya = filter_var($contrasenya, FILTER_DEFAULT) !== false;

  if ($isEmail & $isContrasenya) {
    procesarLogin($email, $contrasenya, $conn);
    header("Location: index.php");
    exit();
  }
  else{
      print("ESTA MALAMENT");
      return;
  }
} else {
  include __DIR__.'/../views/login.php';
  return;
}