<?php
// Inclusion de l'autoload composer qui permet de ne pas faire les inclusions de classes a la main
require_once "vendor/autoload.php";

// Connexion a la base de donnees
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=telekittyobj","root","root");
    $pdo->query("SET NAMES 'UTF8';");
}catch(PDOException $e){
    die($e->getMessage());
}

// Debut de l'application
$page = new \Controller\PageController($pdo);

// Affichage de la page demandee
$page->displayAction();