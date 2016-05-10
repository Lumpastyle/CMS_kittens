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
    private $repository;

    /**
     * PageController constructor.
     */
    public function __construct(\PDO $pdo)
    {
        $this->repository = new PageRepository($pdo);
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

    }

}