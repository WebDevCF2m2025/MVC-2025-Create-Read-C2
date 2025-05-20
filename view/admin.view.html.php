<?php
// si notre session n'est plus valide
if(!isset($_SESSION['user_login'])){
    header("Location: ./");
    exit();
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-2025 : Create-Read | Administration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./">MVC-2025</a>
        <div>
            <a class="nav-link d-inline px-2" href="./">Accueil</a>
            <a class="nav-link d-inline px-2" href="./?p=about">À propos</a>
            <a class="nav-link d-inline p-2 active" href="./?p=admin">Administration</a>
            <a class="nav-link d-inline px-2 text-danger" href="./?p=disconnect">Déconnexion</a>
            <span class="text-muted small">| Connecté : <?=$_SESSION['user_login']?></span>
        </div>
    </div>
</nav>

<h1 class="mb-4 text-center">MVC-2025 : Create-Read | Accueil de l'administration</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm mb-5">
        <h2 class="mb-3 text-center mb-5">Ajouter un article</h2>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?=$error?></div>
        <?php endif; ?>
        <form action="" method="post" name="article">
            <div class="mb-3">
                <label for="article_title" class="form-label">Titre</label>
                <input type="text" class="form-control" id="article_title" name="article_title" maxlength="160" required placeholder="Titre de l'article">
            </div>
            <div class="mb-3">
                <label for="article_text" class="form-label">Texte</label>
                <textarea class="form-control" id="article_text" name="article_text" rows="6" required placeholder="Votre texte"></textarea>
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" id="article_is_published" name="article_is_published" value="1">
                <label class="form-check-label" for="article_is_published">Publier ?</label>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
</body>
</html>
