<?php
    function changeData($nom, $email, $contrasenya, $adress, $city, $postcode, $conn){
      $sql = 'UPDATE usuari 
      SET name = $1, mail = $2, password = $3, address = $4, city = $5, postcode = $6 
      WHERE id = $7';
      $result = pg_query_params($conn, $sql, array($nom, $email, $contrasenya, $adress, $city, $postcode, $_SESSION['user_id']));
      if ($result) {
        $_SESSION['name'] = $nom;
        $_SESSION['mail'] = $email;
        $_SESSION['address'] = $adress;
        $_SESSION['city'] = $city;
        $_SESSION['postcode'] = $postcode;
        return;
      } else {
        echo "Error al insertar datos: " . pg_last_error($conn);
        return;
      }
    }