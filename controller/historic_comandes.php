<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ .'/../model/connectaDb.php';
require_once __DIR__ .'/../model/historic_comandes.php';

$conn = conectaBD();
$comandes = getComandes($conn);

include __DIR__ .'/../views/historic_comandes.php';