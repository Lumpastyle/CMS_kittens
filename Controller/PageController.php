<?php

/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 10/05/2016
 * Time: 12:28
 */

namespace Controller;
use Model\PageRepository;

class PageController
{
    /**
     * PageController constructor.
     * @param \PDO $PDO
     */
    public function __construct(\PDO $PDO)
    {
        $this->repository = new PageRepository($PDO);
    }

    public function ajoutAction()
    {
    }

    public function supprimerAction()
    {
    }

    public function modifierAction()
    {
    }

    public function detailsAction()
    {
    }

    public function listeAction()
    {
    }

    public function displayAction()
    {
        // Definition d'un slug par defaut (si pas de parametre)
        $slug = 'teletubbies';

        // Recuperation du slug dans l'url si il est present
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }

        // en PHP 7
        // $slug = $_GET['p'] ?? $_POST['p'] ?? 'teletubbies';

        // Recuperation des donnees correspondantes au slug
        $page = $this->repository->getBySlug($slug);

        // Si pas de donnees, page 404
        if(!$page){
            // 404
            // include "View/404.php";
            return;
        }

        $nav = $this->generateNav();

        // Si donnees, les afficher
        include "View/page-display.php";
    }

    private function generateNav()
    {
        ob_start();

        // Definition d'un slug par defaut (si pas de parametre)
        $slug = 'teletubbies';

        // Recuperation du slug dans l'url si il est present
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }

        $navi = $this->repository->getNav();

        include_once "View/nav.php";
        
        // Generer la nav
        $nav = ob_get_clean();

        return $nav;
    }
}