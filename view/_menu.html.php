<?php
# view/_menu.html.php
?>
<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="./" class="active">Accueil<br></a></li>
        <li><a href="./?p=about">A propos</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
<?php
// si nous sommes connectés
if(isset($_SESSION['user_login'])):
?>
<a class="btn-getstarted flex-md-shrink-0" href="./?p=disconnect">Déconnexion</a>
<?php
else:
    ?>
<a class="btn-getstarted flex-md-shrink-0" href="./?p=connect">Connexion</a>
<?php
endif;
?>
