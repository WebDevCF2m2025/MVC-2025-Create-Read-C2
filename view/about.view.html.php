<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MVC-2025 : Create-Read | À propos de nous</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-white border-bottom shadow-sm mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="./">MVC-2025</a>
        <div>
            <a class="nav-link d-inline p-2" href="./">Accueil</a>
            <span class="nav-link d-inline p-2 active">À propos</span>
            <?php if(isset($_SESSION['user_login'])): ?>
                <a class="nav-link d-inline p-2" href="./?p=admin">Administration</a>
                <a class="nav-link d-inline p-2 text-danger" href="./?p=disconnect">Déconnexion</a>
                <span class="text-muted small">| Connecté : <?=$_SESSION['user_login']?></span>
            <?php else: ?>
                <a class="nav-link d-inline p-2" href="./?p=connect">Connexion</a>
            <?php endif; ?>
        </div>
    </div>
</nav>

<h1 class="mb-4 text-center">MVC-2025 : Create-Read | À propos de nous</h1>
<div class="container">
    <div class="bg-white p-4 rounded shadow-sm mb-5">
        <h2 class="mb-5 text-center">CF2m</h2>
        <p>Le centre de formation est ouvert à tous.</p>
        <p>Le Centre de Formation 2 Mille (CF2m), implanté à Saint-Gilles, propose des formations professionnelles en informatique pour chercheurs et chercheuses d’emploi ainsi que des formations de base et de détermination pour les jeunes de 18 à 29 ans. Il a pour mission de lutter contre toutes les formes d’exclusion sociale et culturelle et contre les discriminations dans l’accès à la formation et à l’emploi.</p>
        <p>Le CF2m est donc actif dans le secteur de l’insertion sociale et professionnelle pour chercheurs et chercheuses d’emploi, indemnisé.e.s ou non.</p>
        <p>En partenariat avec Bruxelles-Formation et Actiris.</p>
        <p>Visant l’insertion professionnelle dans des secteurs porteurs, nos formations sont dispensées en cours du jour en partenariat avec Bruxelles-Formation et Actiris. Elles se clôturent par un stage en entreprise de 6 semaines. Enfin, un accompagnement social et une aide à la recherche d’emploi complètent les services offerts aux chercheurs et chercheuses d’emploi.</p>
        <p>Le CF2m, un acteur de l’économie sociale à Bruxelles.</p>
        <p>Le Centre de Formation 2 Mille est également actif dans le secteur de l’économie sociale : d’une part dans le réemploi informatique et la dématérialisation de déchets électriques et électroniques, et d’autre part, dans la communication numérique (services graphiques : prépresse, imprimerie et création de sites web).</p>
        <p>En outre, le CF2m est doté d’un pôle recherche et développement dans le secteur environnemental pour l’accès aux ressources et à l’entreprenariat social.</p>
    </div>
</div>
</body>
</html>
