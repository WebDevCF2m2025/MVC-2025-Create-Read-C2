<?php
# controller/PublicController.php

// nous sommes sur la page de connexion
if(isset($_GET['p']) && $_GET['p']==="connect"){

    // essai de connexion
    if(isset($_POST['user_login'],$_POST['user_pwd'])){
        //var_dump($_POST);
        $connect = connectUser($db,$_POST['user_login'],$_POST['user_pwd']);
        var_dump($connect);
    }
    require_once "../view/connect.html.php";
}
