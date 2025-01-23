<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/../model/connectaDb.php';

$conn = conectaBD();

require_once __DIR__ .'/../model/productes.php';

$category_id = $_GET['id'] ?? null;

$products = getProductsByCategoryId($category_id, $conn);

//$categories = getCategories();
include __DIR__ .'/../views/productes.php';