<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Exemple 5 | Accueil</title>
</head>
<body>
<nav>
    Accueil |
    <a href="./?p=about">A propos</a> |
    <?php
    if(isset($_SESSION['userlogin'])):
        ?>
        <a href="./?p=admin">Administration</a> |
        <a href="./?p=disconnect">Déconnexion</a> | de votre compte <?=$_SESSION['userlogin'] ?>

    <?php
    else:
        ?>
        <a href="./?p=connect">Connexion</a> |
    <?php
    endif;
    ?>
</nav>
<h1>Exemple 5 | Accueil</h1>
<h2>Nos derniers articles</h2>
<?php
if(empty($articles)):
    ?>
    <h3>Pas encore d'articles</h3>
<?php
else:
    $nbArticles = count($articles);
    $pluriel = $nbArticles>1 ? "s" : "";
    ?>
    <h3>Nous avons <?=$nbArticles?> article<?=$pluriel?></h3>
    <?php
    foreach($articles as $article):
        ?>
        <h4><?=$article['article_title']?></h4>
        <p><?=substr($article['article_text'],0,200)?> ... lire la suite</p>
        <h5>Ecrit le <?=$article['article_date_published']?>?></h5>
        <hr>
    <?php
    endforeach;
endif;
?>
</body>
</html>