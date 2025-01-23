<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/../model/connectaDb.php';
require_once __DIR__ .'/../model/categories.php';

$conn = conectaBD();
$categories = getCategories($conn);

include __DIR__ .'/../views/categories.php';