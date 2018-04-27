<?php 
namespace App\Controller;

// Les Différents Bundles don't on à Besoin :
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController{

    // Affiche la Home Page :
    /**
     * 
     * @Route("/", "sfghdfhg")
     * 
     */
    public function homePageAction(){
        return new Response("Coucou !");
    }


    /**
     * @Route("/news/test")
     */
    public function show(){
        return new Response("Coucou T'es sur la 2eme page !");
        
    }


}