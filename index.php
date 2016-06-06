<?php
require_once "init.php";
// Debut de l'application
$page = new \Controller\PageController($pdo);

// Affichage de la page demandee
$page->displayAction();