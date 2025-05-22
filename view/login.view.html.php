<?php
if(isset($_SESSION['user_login'])){
  header("Location: ./");
  exit();
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <title>Exemple 5 | Connexion</title>
</head>
<body class="bg-dark text-white">
<nav>
  <a href="./">Accueil</a> |
  <a href="./?p=about">A propos</a> |
  Connexion |
</nav>
<h1>Exemple 5 | Connexion</h1>
<h2>Veuillez vous connecter</h2>
<?php
if(isset($error)):
  ?>
  <h3 class="error"><?=$error?></h3>
<?php
endif;
?>
<form action="" name="connect" method="post">
  <input type="text" name="user_login" placeholder="Votre login" required><br>
  <input type="password" name="user_pwd" placeholder="Votre mot de passe" required><br>
  <input type="submit" value="se connecter">
</form>
</body>
</html>