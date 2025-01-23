<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $id = $_GET['id'] ?? 0;
        $nom = $_GET['nom'] ?? '';
        $preu = $_GET['preu'] ?? 0;
        
        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = array();
        }

        if($nom !== '' && $preu !== 0 && $id !== 0){
            if(isset($_SESSION['carrito'][$nom])){
                $_SESSION['carrito'][$nom]['quantitat'] += 1;
            } else {
                $_SESSION['carrito'][$nom] = array(
                    'nom' => $nom,
                    'preu' => $preu,
                    'id' => $id,
                    'quantitat' => 1
                );
            }
        }

        if(isset($_GET['add'])){
            $productAdd = $_GET['add'];
            if(isset($_SESSION['carrito'][$productAdd])){
                $_SESSION['carrito'][$productAdd]['quantitat']++;
            }
        }

        if(isset($_GET['sub'])){
            $productSub = $_GET['sub'];
            if(isset($_SESSION['carrito'][$productSub]) && $_SESSION['carrito'][$productSub]['quantitat'] > 1){
                $_SESSION['carrito'][$productSub]['quantitat']--;
            }
        }

        if(isset($_GET['rm'])){
            $productRm = $_GET['rm'];
            if(isset($_SESSION['carrito'][$productRm])){
                unset($_SESSION['carrito'][$productRm]);
            }
        }
    }       

    require __DIR__.'/../views/carrito_petit.php';
?>