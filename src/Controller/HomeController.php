<?php 
namespace App\Controller;

// Les Différents Bundles don't on à Besoin :
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController{

    /**
     * @Route("/")
     */
    // Affiche la Home Page :
    public function homePageAction(){
        return new Response("Coucou !");
    }


    /**
     * @Route ("/news/{slug}")
     */
    // Affiche la page 2 :
    public function show($slug){

        //dump($slug, $this);

        $comments = [
            'I ate a normal rock once. It did NOT taste like bacon!',
            'Woohoo! I\'m going on an all-asteroid diet!',
            'I like bacon too! Buy some from my site! bakinsomebacon.com',
        ];
        
        return $this->render('news/show.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
        ]);
    }
}