<?php
# exemple5MVC/public/index.php

/*
 * Contrôleur frontal
 */

session_start();

require_once "../config-dev.php";


try {
    $db = new PDO(DB_DSN, DB_LOGIN, DB_PWD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion database: " . $e->getMessage());
}

if(isset($_SESSION['user_login'])) {
  require_once "../controller/PrivateController.php";
}else {
  require_once "../controller/PublicController.php";
}


$db = null;