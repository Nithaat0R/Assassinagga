<?php
    function getCategories($conn){
        try{
            $SQL = "SELECT * FROM category ORDER BY id";
            $result = pg_query($conn, $SQL);

            if(!$result){
                echo "Error SQL: " . pg_last_error($conn);
                return array();
            }

            $categories = array();
            while($row = pg_fetch_array($result)){
                $categories[] = $row;
            }
        } catch (Exception $e){
            echo "Error:". $e->getMessage() ."";
            return array();
        }

        return $categories;
    }