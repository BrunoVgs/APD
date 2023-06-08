<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/admin/joueurs", name="app_back_joueurs", methods={"GET})
     */
    public function index(): Response
    {
        return $this->render('player/index.html.twig', [
            
        ]);
    }


    /**
     * @Route("/admin/new/joueur", name="new", methods={"GET", "POST"}) 
     */
    public function new():Response 
    {
        return $this->render('player/new.html.twig',[

        ]);
    }
}
