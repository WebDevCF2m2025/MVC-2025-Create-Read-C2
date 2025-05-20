<?php
if(isset($_SESSION['user_login'])){
    header("Location: ./");
    exit();
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>Connexion</title>
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
        <li class="nav-item">
          <a class="nav-link active" href="./?p=connect">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 class="mb-4">Connexion</h1>
<h2 class="mb-3">Veuillez vous connecter</h2>
<?php if(isset($error)): ?>
  <div class="alert alert-danger"><?=$error?></div>
<?php endif; ?>
<form action="" name="connect" method="post" class="mb-4" style="max-width:400px;margin:auto;">
    <div class="mb-3">
        <input type="text" class="form-control" name="user_login" placeholder="Votre login" required>
    </div>
    <div class="mb-3">
        <input type="password" class="form-control" name="user_pwd" placeholder="Votre mot de passe" required>
    </div>
    <button type="submit" class="btn btn-primary w-100">Se connecter</button>
</form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>