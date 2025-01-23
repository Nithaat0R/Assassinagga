<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if($_SERVER["REQUEST_METHOD"] == "GET")
    {
        $id_producte = $_GET['id'];
        $nom = $_GET['nom'];
        $preu = $_GET['preu'];

        if(!isset($_SESSION['carrito'])){
            $_SESSION['carrito'] = array();
        }
    }

    require __DIR__.'/../views/carrito.php';
?>