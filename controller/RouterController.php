<?php

// appel des dépendances
include "../model/ArticleModel.php";
include "../model/UserModel.php";

// pages communes à private et public
if(!isset($_GET['p'])){
    // chargement des articles pour l'accueil
    $articles = getArticles($db,true);
    // appel de la vue
    include "../view/homepage.html.php";
}elseif ($_GET['p']==='about'){
    // appel de la vue
    include "../view/about.html.php";
}

// si nous sommes connectés
if(isset($_SESSION['user_login'])){
    require_once "../controller/PrivateController.php";
// nous ne sommes pas connectés
}else{
    require_once "../controller/PublicController.php";
}