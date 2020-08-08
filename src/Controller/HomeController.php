<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig' );
    }

    /**
     * @Route("/Categorie", name="app_categorie")
     */
    public function categorie()
    {
        return $this->render('home/categorie.html.twig' );
    }

    /**
     * @Route("/Produit_list", name="app_produit_list")
     */
    public function produit_list()
    {
        return $this->render('home/produit_list.html.twig' );
    }
}
