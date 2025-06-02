<?php
# /controller/PrivateController.php

if(isset($_GET['p'])){
    // si on veut se déconnecter
    if($_GET['p']==="disconnect"){
        disconnectUser();
        header("Location: ./");
        exit();
    }elseif($_GET['p']==="admin"){
        // si on a envoyé un nouvel article
        if(isset($_POST['article_title'])){
            $insert = addArticle($db,$_POST);
            if($insert){
                // retour sur l'admin avec le message de remerciement
                header("Location: ./?p=admin&message=Merci pour ce message");
                exit();
            }else{
                $error = "Erreur lors de l'insertion de l'article <a  href='#' onclick='history.go(-1);'>retour au formulaire</a>";
            }
        }
        include "../view/admin.html.php";
    }else{
        include "../view/404.html.php";
    }
}