<?php 
namespace App\Controller;

// Les Différents Bundles don't on à Besoin :
use Symfony\Component\HttpFoundation\Response;

class HomeController{

    // Affiche la Home Page :
    public function homePageAction(){
        return new Response('Coucou !');
    }




}