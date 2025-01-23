<?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $_SESSION['carrito'] = [];

    include __DIR__.'/../views/carrito_petit.php';
?>