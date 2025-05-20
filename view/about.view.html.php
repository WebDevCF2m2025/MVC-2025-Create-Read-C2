<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>À propos de nous</title>
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
          <a class="nav-link active" href="./?p=about">À propos</a>
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

<h1 class="mb-4">À propos de nous</h1>
<h2 class="mb-3">CF2m</h2>
<p>Le centre de formation est ouvert à tous</p>
<p>Le Centre de Formation 2 Mille (CF2m), implanté à Saint-Gilles, propose des formations professionnelles en informatique pour chercheurs et chercheuses d’emploi ainsi que des formations de base et de détermination pour les jeunes de 18 à 29 ans. Il a pour mission de lutter contre toutes les formes d’exclusion sociale et culturelle et contre les discriminations dans l’accès à la formation et à l’emploi.</p>
<p>Le CF2m est donc actif dans le secteur de l’insertion sociale et professionnelle pour chercheurs et chercheuses d’emploi, indemnisé.e.s ou non.</p>
<p>En partenariat avec Bruxelles-Formation et Actiris.</p>
<p>Visant l’insertion professionnelle dans des secteurs porteurs, nos formations sont dispensées en cours du jour en partenariat avec Bruxelles-Formation et Actiris. Elles se clôturent par un stage en entreprise de 6 semaines. Enfin, un accompagnement social et une aide à la recherche d’emploi complètent les services offerts aux chercheurs et chercheuses d’emploi.</p>
<p>Le CF2m, un acteur de l’économie sociale à Bruxelles.</p>
<p>Le Centre de Formation 2 Mille est également actif dans le secteur de l’économie sociale : d’une part dans le réemploi informatique et la dématérialisation de déchets électriques et électroniques, et d’autre part, dans la communication numérique (services graphiques : prépresse, imprimerie et création de sites web).</p>
<p>En outre, le CF2m est doté d’un pôle recherche et développement dans le secteur environnemental pour l’accès aux ressources et à l’entreprenariat social.</p>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
</body>
</html>