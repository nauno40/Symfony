<?php 
namespace App\Controller;

// Les Différents Bundles don't on à Besoin :
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{

    // Affiche la Home Page :
    public function homePageAction(){
        return new Response("Coucou !");
    }

    // Affiche la page 2 :
    public function page2Action(){
        return new Response("Bienvenu sur la page 2 !");
    }
}