<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-2025 : Create-Read | Accueil</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./">MVC-2025</a>
        <div class="navbar-nav">
            <a class="nav-link <?= !isset($_GET['p']) ? 'active text-primary' : '' ?>" href="./">Accueil</a>
            <a class="nav-link <?= (isset($_GET['p']) && $_GET['p'] === 'about') ? 'active' : '' ?>" href="./?p=about">À propos</a>
            <?php if(isset($_SESSION['user_login'])): ?>
                <a class="nav-link <?= (isset($_GET['p']) && $_GET['p'] === 'admin') ? 'active' : '' ?>" href="./?p=admin">Administration</a>
                <a class="nav-link text-danger" href="./?p=disconnect">Déconnexion</a>
                <span class="nav-link text-muted">|</span>
                <span class="text-muted small ms-3">
                    Connecté : <?=$_SESSION['user_login']?><br>
                    <small>(<?=$_SESSION['user_role']?>)</small>
                </span>
            <?php else: ?>
                <a class="nav-link <?= (isset($_GET['p']) && $_GET['p'] === 'connect') ? 'active' : '' ?>" href="./?p=connect">Connexion</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<h1 class="mb-4 text-center">MVC-2025 : Create-Read | Accueil</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm">
        <h2 class="mb-1 text-center">Nos derniers articles</h2>
        <?php if(empty($articles)): ?>
            <div class="alert alert-info">Pas encore d'articles</div>
        <?php else:
            $nbArticles = count($articles);
            $pluriel = $nbArticles > 1 ? "s" : "";
            ?>
            <p class="text-secondary text-center mb-5">Nous avons <?=$nbArticles?> article<?=$pluriel?></p>
            <?php foreach($articles as $article): ?>
            <div class="mb-4 pb-3 border-bottom">
                <h4 class="mb-2"><?=$article['article_title']?></h4>
                <p class="mb-1"><?=substr($article['article_text'],0,200)?>...<a class="link-secondary" href="#"> Lire la suite</a></p>
                <div class="text-muted small">
                    Publié le <?= dateFR($article['article_date_published'])?> par <?=$article['user_name']?> (<?=$article['user_role']?>)
                </div>
            </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>

</body>
</html>

