<?php
    function inputData($nom, $email, $contrasenya, $adress, $city, $postcode, $conn){
        
        $sql = 'INSERT INTO usuari (name, mail, password, address, city, postcode)
                VALUES ($1, $2, $3, $4, $5, $6)';

        $result = pg_query_params($conn, $sql, array($nom, $email, $contrasenya, $adress, $city, $postcode));
    
        if ($result) {
            return;
        } else {
            echo "Error al insertar datos: " . pg_last_error($conn);
            return;
        }
    }