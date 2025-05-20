<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
    
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="./?p=about">À propos</a>
        </li>
        <?php if(isset($_SESSION['user_login'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="./?p=admin">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?p=disconnect">Déconnexion</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="./?p=connect">Connexion</a>
          </li>
        <?php endif; ?>
      </ul>
      <?php if(isset($_SESSION['user_login'])): ?>
        <span class="navbar-text">
          Connecté comme <strong><?=htmlspecialchars($_SESSION['user_name'])?></strong>
        </span>
      <?php endif; ?>
    </div>
  </div>
</nav>

<h1 class="mb-4 text-center">Accueil</h1>
<h2 class="mb-3">Nos derniers articles</h2>
<?php if(empty($articles)): ?>
  <div class="alert alert-info">Pas encore d'articles</div>
<?php else: ?>
  <?php
    $nbArticles = count($articles);
    $pluriel = $nbArticles > 1 ? "s" : "";
  ?>
  <h3 class="mb-4">Nous avons <?=$nbArticles?> article<?=$pluriel?></h3>
  <div class="row">
    <?php foreach($articles as $article): ?>
      <div class="col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <h4 class="card-title"><?=htmlspecialchars($article['article_title'])?></h4>
            <p class="card-text"><?=htmlspecialchars(substr($article['article_text'],0,200))?>... <a href="#">lire la suite</a></p>
          </div>
          <div class="card-footer text-muted">
            Écrit le <?=htmlspecialchars($article['article_date_created'])?> par <?=htmlspecialchars($article['user_name'])?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>