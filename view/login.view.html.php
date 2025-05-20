<?php
if (isset($_SESSION['user_login'])) {
    header("Location: ./");
    exit();
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1">
    <title>MVC-2025 | Connexion</title>
    <!-- Tu peux utiliser Bootstrap pour rester cohérent avec le reste du site -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./">MVC-2025</a>
        <div>
            <a class="nav-link d-inline px-2" href="./">Accueil</a>
            <a class="nav-link d-inline px-2" href="./?p=about">À propos</a>
            <span class="nav-link d-inline px-2 active">Connexion</span>
        </div>
    </div>
</nav>

<h1 class="mb-4 text-center">MVC-2025 : Create-Read | Connexion à l'administration</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="bg-white rounded shadow-sm p-4">
                <?php if (isset($error)) : ?>
                    <div class="alert alert-danger text-center"><?=$error?></div>
                <?php endif; ?>
                <form action="" name="connect" method="post">
                    <div class="mb-3">
                        <label for="user_login" class="form-label">Login</label>
                        <input type="text" class="form-control" id="user_login" name="user_login" placeholder="Votre login" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="user_pwd" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="user_pwd" name="user_pwd" placeholder="Votre mot de passe" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
