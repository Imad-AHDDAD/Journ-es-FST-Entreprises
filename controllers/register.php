<?php

session_start();

if (isset($_POST['type']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['tel'])) {

    // Remove all illegal characters from email, phone and name
    $name = filter_var($_POST['name'], FILTER_UNSAFE_RAW);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = $_POST['tel'];
    $type = $_POST['type'];

    // Validate e-mail
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false && !empty($email) && !empty($name) && validatePhone($phone) && !empty($phone) && !empty($type)) {
        register($type, $name, $email, $phone);
    } else {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            showError("$email est invalide");
        } elseif (empty($email)) {
            showError("merci de saisir votre email");
        } elseif (empty($name)) {
            showError("merci de saisir votre nom");
        } elseif (empty($phone)) {
            showError("merci de saisir votre numero de téléphone");
        } elseif (!validatePhone($phone)) {
            showError("$phone est invalide");
        } elseif (empty($type)) {
            showError("merci de choisir un type");
        } else {
            showError("une erreur s'est produite");
        }
    }
} else {
    header("location: ../");
}

// register
function register($type, $name, $email, $phone)
{
    $url = "https://script.google.com/macros/s/AKfycbxjohrVXEiqCO-wQZafrXKXNcuAeuKuwoUCE9i4b1ZvNPhSUj2gSe-5APwbsIIwZFXo/exec";
    $postData = [
        "action" => "register",
        "type" => $type,
        "name" => $name,
        "email" => $email,
        "phone" => $phone
    ];

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POSTFIELDS => $postData
    ]);

    $result = curl_exec($ch);
    $result = json_decode($result, 1);

    if ($result['status'] == "success") {
        $_SESSION['success'] = "l'inscription est terminée avec succes";
        header("location: ../index.php#registration");
    } else {
        showError($result['message']);
    }
}

// show error
function showError($msg)
{
    $_SESSION['error'] = $msg;
    header("location: ../index.php#registration");
}

// phone number validating
function validatePhone($phone)
{
    $regex = '/^\+?([0-9]{1,4})?\s?([0-9]{10})$/';
    if (preg_match($regex, $phone)) {
       return true;
    } else {
        return false;
    }
}
