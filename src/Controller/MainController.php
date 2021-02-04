<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//extends le abstract pour utiliser le render
class MainController extends AbstractController{

 
    
    /** 
     * @Route("/", name="homepage")
     */
    public function homepage(): Response {
        //Etape avant d'utiliser twig et le make
        //return new Response("<h1>Vous êtes chez THE GOOD ONE</h1>");
        return $this->render('/homepage.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response {

        return new Response("<h3>Contactez nous</h3>");
    }


}