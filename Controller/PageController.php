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
        require "View/admin_ajouter.php";

        if(count($_POST) === 0) {
            // ne rien faire
        } else {
            // traitement de la requete
            $newpage = (object) array(
                'slug' => $_POST['slug'],
                'title' => $_POST['title'],
                'body' => $_POST['body']
            );
            $this->repository->inserer($newpage);
        }
    }

    public function supprimerAction()
    {
        $id = $_GET['id'];
        $this->repository->supprimer($id);
        header('location:index.php');
    }

    public function modifierAction()
    {
        $id = $_GET['id'];
        $data = $this->repository->getById($id);
        require "View/admin_modifier.php";

        if(count($_POST) === 0) {
            // ne rien faire
        } else {
            // traitement de la requete
            $newpage = (object) array(
                'slug' => $_POST['slug'],
                'title' => $_POST['title'],
                'body' => $_POST['body']
            );
            $this->repository->modifier($id, $newpage);
        }
    }

    public function detailsAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('mdr le truc');
        }
        // recuperation de donnees
        $data = $this->repository->getById($_GET['id']);
        // affichage des donnees
        require "View/admin_details.php";
    }

    public function listeAction()
    {
        // recuperer les donnees
        $data = $this->repository->findAll();
        // afficher les donnees
        include "View/admin_list.php";
    }

    public function displayAction()
    {
        // Definition d'un slug par defaut (si pas de parametres)
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