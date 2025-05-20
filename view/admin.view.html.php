<?php
// si notre session n'est plus valide
if(!isset($_SESSION['userlogin'])){
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
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Exemple 5 | Accueil de l'administration</title>
</head>
<body>
<nav>
    <a href="./">Accueil</a> |
    <a href="./?p=about">À propos</a> |
    Administration |
    <a href="./?p=disconnect">Déconnexion</a> | de votre compte <?=$_SESSION['userlogin'] ?>
</nav>
<h1>Exemple 5 | Accueil de l'administration</h1>
<h2>Ajouter un article</h2>
<?php
if(isset($error)):
    ?>
    <h3 class="error"><?=$error?></h3>
<?php
endif;
?>
<form action="" method="post" name="article">
    <input type="text" name="articletitle" placeholder="titre" maxlength="160" required><br>
    <textarea name="articletext" placeholder="votre texte" required></textarea><br>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>