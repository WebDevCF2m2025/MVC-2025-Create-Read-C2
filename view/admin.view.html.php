<?php
// si notre session n'est plus valide
if(!isset($_SESSION['user_login'])){
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
<body >
<nav >
  <div >
    <button class="navbar-toggler" type="button"  data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" data-bs-toggle="collapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-navjustify-content-center  d-flex  w-75">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./?p=about">A propos</a>
        </li>
          <li class="nav-item">
            <a class="nav-link">Administration</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./?p=disconnect">Déconnexion </a> |
          </li>
      </ul>
    </div>
  </div>
</nav>
<h1>Accueil</h1>
<h2>Ajouter l'article</h2>
<?php
if(isset($error)):
  ?>
  <p class="error"><?php echo $error;?></p>
<?php
endif;
?>
<form action="" method="post" name="article">
  <input type="text" name="article_title" placeholder="titre" maxlength="160" required>
  <br/>
  <textarea name="article_text" placeholder="votre texte" required></textarea>
  <br/>
  <input type="checkbox" name="article_is_publish" value="1">Publier
  <br/>
  <input type="submit" value="Envoyer">
</form>
</body>
</html>