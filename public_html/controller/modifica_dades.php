<?php

require_once __DIR__ .'/../model/connectaDb.php';
require_once __DIR__ .'/../model/modifica_dades.php';

$conn = conectaBD();

//If se ha enviado el formulario entonces entro a ... sino cargo la vista. 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['mail'];
    $isEmail = filter_var($email, FILTER_VALIDATE_EMAIL) !== false;

    $nom = $_POST['nom'];
    $isNom = filter_var($nom, FILTER_DEFAULT) !== false;
    $contrasenya = password_hash($_POST['contrasenya'], PASSWORD_DEFAULT);
    $isContrasenya = filter_var($contrasenya, FILTER_DEFAULT) !== false;
    $address = $_POST['address'];
    $isAddress = filter_var($address, FILTER_DEFAULT) !== false;
    $city = $_POST['city'];
    $isCity = filter_var($city, FILTER_DEFAULT) !== false;
    $postcode = $_POST['postcode'];
    $isPostcode = filter_var($postcode, FILTER_DEFAULT) !== false;

    if ($isNom && $isEmail && $isContrasenya && $isAddress && $isCity && $isPostcode) {
        changeData($nom, $email, $contrasenya, $address, $city, $postcode, $conn);
        header("Location: index.php");
        exit();
    }
    else{
        print("ESTA MALAMENT");
        return;
    }
}else{
    include __DIR__.'/../views/modifica_dades.php';
    return;
}