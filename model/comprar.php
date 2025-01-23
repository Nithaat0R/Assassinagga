<?php
    function comprar($conn, $elements, $preu){
        
        $sql = 'INSERT INTO comanda (n_elements, total_price, user_id, date)
                VALUES ($1, $2, $3, NOW()) RETURNING id';

        $result = pg_query_params($conn, $sql, array($elements, $preu, $_SESSION['user_id']));
    
        if ($result) {

            $comanda_id = pg_fetch_result($result, 0, 0);

            foreach ($_SESSION['carrito'] as $producte){
                $sql = 'INSERT INTO linia_comanda (product_name, quantity, unit_price, total_price, comanda_id, producte_id)
                    VALUES ($1, $2, $3, $4, $5, $6)';
    
                $result = pg_query_params($conn, $sql, array($producte['nom'], $producte['quantitat'], $producte['preu'], $producte['preu'] * $producte['quantitat'], $comanda_id, $producte['id']));
                
                if(!$result){
                    echo "Error al insertar datos: " . pg_last_error($conn);
                }
            
            }

            return;

        } else {

            echo "Error al insertar datos: " . pg_last_error($conn);

            return;
        }
    }

    