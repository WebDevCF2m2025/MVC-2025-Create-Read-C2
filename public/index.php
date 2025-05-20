<?php
# exemple5MVC/public/index.php

/*
 * Contrôleur frontal
 */

session_start();

// dépendances
require_once "../config-dev.php";

// notre connexion PDO
try {
    $db = new PDO(DB_DSN, DB_LOGIN, DB_PWD);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}

if(isset($_SESSION['user_login'])) {
  require_once "../controller/PrivateController.php";
}else {
  require_once "../controller/PublicController.php";
}

// ici nos contrôleurs

echo '<h4>session_id() ou SID</h4>';
var_dump(session_id());
echo '<h4>$_GET</h4>';
var_dump($_GET);
echo '<h4>$_SESSION</h4>';
var_dump($_SESSION);
echo '<h3>$_POST</h3>';
var_dump($_POST);


// bonne pratique
$db = null;