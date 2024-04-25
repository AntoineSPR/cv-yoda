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

$section = array_rand($reasons);
$yodaAnswer = $reasons[$section][array_rand($reasons[$section])];

function getYodaIntroPhrase($section)
{
    $introPhrase = "";
    if ($section === "Perspective Unique et Humour") {
        $introPhrase = "Ma perspective";
    } else if ($section === "Mentorat et Apprentissage") {
        $introPhrase = "Ma leçon";
    } else if ($section === "Perspective Spirituelle et Philosophique") {
        $introPhrase = "Ma philosophie";
    } else {
        $introPhrase = "Mon conseil";
    }
    return $introPhrase;
}



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="webroot/styles/result.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200..800&display=swap" rel="stylesheet" />
    <title>Confirmation</title>
</head>

<body class="result">
    <div>
        <h2>Besoin de <?php echo $section ?>, tu as ?</h2>
        <h2> <?php echo getYodaIntroPhrase($section) ?>, je partage :</h2>
        <h1><q><?php echo $yodaAnswer ?></q></h1>
        <a href="https://cv-de-yoda-274d08f7642e.herokuapp.com/">Je rejoins Yoda</a>
    </div>
</body>