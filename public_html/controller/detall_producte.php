<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__.'/../model/connectaDb.php';

$conn = conectaBD();

require_once __DIR__.'/../model/categories.php';
require_once __DIR__.'/../model/productes.php';

$productId = (int) $_GET['id'];

$product = getProductById($productId, $conn);

require __DIR__.'/../views/detall_producte.php';