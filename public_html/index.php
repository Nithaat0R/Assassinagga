<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<?php

#https://tdiw-j10.deic-docencia.uab.cat/index.php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ ."/base-url-config.php";

$action = $_GET['action'] ?? null;

switch($action) {
    case 'categories':
        require __DIR__.'/resource_llista_categories.php';
        break;
    case 'productes':
        require __DIR__.'/resource_llista_productes.php';
        break;
    case 'detalls_producte':
        require __DIR__.'/resource_detalls_producte.php';
        break;
    case 'login':
        require __DIR__.'/resource_login.php';
        break;
    case 'register':
        require __DIR__.'/resource_registre.php';
        break;
    case 'compte':
        require __DIR__.'/resource_compte.php';
        break;
    case 'modifica_dades':
        require __DIR__.'/resource_modifica_dades.php';
        break;
    case 'historic_comandes':
        require __DIR__.'/resource_historic_comandes.php';
        break;
    default:
        require __DIR__.'/resource_llista_categories.php';
}