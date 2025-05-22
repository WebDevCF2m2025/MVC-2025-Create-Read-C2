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
<body class="bg-dark text-light">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex justify-content-center w-100">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" >Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?p=about">A propos</a>
        </li>
        <?php
        if(isset($_SESSION['user_login'])):
        ?>
        <li class="nav-item">
          <a class="nav-link" href="./?p=admin">Administration</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?p=disconnect">Déconnexion</a>
        </li>
        <?php
        else:
        ?>
        <li class="nav-item">
          <a class="nav-link" href="./?p=connect">Connexion</a>
        </li>
        <?php
        endif;
        ?>
      </ul>
    </div>
  </div>
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
    <h5>Ecrit le <?=$article['article_date_published']?> par <?=$article['user_name']?></h5>
    <hr>
  <?php
  endforeach;
endif;
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>