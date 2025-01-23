<?php
    function getComandes($conn){
        try{
            $SQL = "SELECT lc.*
            FROM linia_comanda lc
            JOIN comanda c ON lc.comanda_id = c.id
            WHERE c.user_id = $1
            ORDER BY lc.id;";

            $result = pg_query_params($conn, $SQL, array($_SESSION['user_id']));

            if(!$result){
                echo "Error SQL: " . pg_last_error($conn);
                return array();
            }

            $comandes = array();

            while ($row = pg_fetch_assoc($result)) {
                $comanda_id = $row['comanda_id'];
    
                if (!isset($comandes[$comanda_id])) {
                    $comandes[$comanda_id] = array();
                }

                $comandes[$comanda_id][] = $row;
            }

        } catch (Exception $e){
            echo "Error:". $e->getMessage() ."";
            return array();
        }

        return $comandes;
    }