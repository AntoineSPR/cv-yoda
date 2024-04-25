<?php
require 'reasons.php';

$data = array_map('htmlentities', array_map('trim', $_POST));

$errors = [];

if (empty($data['name'])) {
    $errors[] = "Please enter your name";
}

if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email";
}

if (strlen($data['message']) < 30) {
    $errors[] = "Please give us more details";
}

if (!isset($data['reason'])) {
    $errors[] = 'Please select your reason';
}

if (empty($errors)) {

}


if (!empty($errors)) {
    require 'error.php';
    die();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/result.css" />
    <title>Confirmation</title>
</head>

<body>
    <h1>Pour votre message, je vous remercie. <br> Bientôt vous répondre, je vais.</h1>
    <a href="https://cv-de-yoda-274d08f7642e.herokuapp.com/">Je rejoins Yoda</a>
</body>