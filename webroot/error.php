<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="media/jedi-order.png">
  <link rel="stylesheet" href="styles/error.css" />
  <title>Erreur, il y a</title>
</head>

<body class="error">
  <div>
  <h1>ERREUR, TU AS COMMISE</h1>
  <ul>
      <?php foreach($errors as $error) : ?>
        <li><?= $error ?></li>
      <?php endforeach; ?>
  </ul>
  <h2> Cède à la tentation du côté Obscur sur ce Sith
    <a href="http://fr.starwars.wikia.com/wiki/C%C3%B4t%C3%A9_Obscur_de_la_Force">Star Wars</a>
  <br>
  Ou revient dans la lumière</h2>
  <button onclick="history.back()">Je rejoins Yoda</button>
</div>
</body>
</html>