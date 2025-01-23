<?php

require_once __DIR__ .'/../model/connectaDb.php';

$conn = conectaBD();

function procesarLogin($mail, $contrasenya, $conn) {
  //Preparem la comanda de cerca
  $sql = 'SELECT * FROM usuari where mail = $1';
  $params = [$mail];

  $result = pg_query_params($conn, $sql, $params);
  $compte = pg_fetch_assoc($result);

  if ($result === false) {
    // Manejar el error de la consulta
    return ['error' => 'Error ejecutando la consulta'];
  }
  if ($compte === false) {
    // No se encontró un usuario con ese mail
    return ['error' => 'Usuario no encontrado'];
  } else{
    if (password_verify($contrasenya, $compte['password'])) {
      $_SESSION['user_id'] = $compte['id'];
      $_SESSION['name'] = $compte['name'];
      $_SESSION['mail'] = $compte['mail'];
      $_SESSION['address'] = $compte['address'];
      $_SESSION['city'] = $compte['city'];
      $_SESSION['postcode'] = $compte['postcode'];
  } else {
    echo('LOS DATOS NOOOOOOOOOOOOO SON CORRECTOS');
    return null;
  }
}
  
}