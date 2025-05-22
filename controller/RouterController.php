<?php

// appel des dépendances
include "../model/ArticleModel.php";

// pages communes à private et public
if(!isset($_GET['p'])){
    // chargement des articles pour l'accueil
    $articles = getArticles($db,);
    // appel de la vue
    include "../view/homepage.html.php";
}elseif ($_GET['p']==='about'){

}

// si nous sommes connectés
if($_SESSION['user_login']){
    require_once "../controller/PrivateController.php";
// nous ne sommes connectés
}else{
    require_once "../controller/PublicController.php";
}