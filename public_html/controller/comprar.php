<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $unitats = 0;
    $import = 0;
    
    foreach ($_SESSION['carrito'] as $producte){
        $unitats += $producte['quantitat'];
        $import += $producte['preu'] * $producte['quantitat'];
    }

    require_once __DIR__ .'/../model/connectaDb.php';
    require_once __DIR__ .'/../model/comprar.php';

    $conn = conectaBD();
    comprar($conn, $unitats, $import);
?>