<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/back/player", name="app_back_player_")
 */
class PlayerController extends AbstractController
{
    /**
     * @Route("/", name="index" methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('player/index.html.twig', [
            
        ]);
    }

    /**
     * 
     * @Route("/new", name="new", methods={"GET", "POST"})   
     * 
     */
    public function new() : Response 

    {
        return $this->render('player/new.html.twig', [

        ]);
    }

    /**
     * Undocumented function
     *
     * @Route ("/{id}", name="show", methods={"GET"})
     */
    public function show() :Response

    {
        return $this->render('player/show.html.twig', [

        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit()
    {
        return $this->render('player/edit.html.twig', [

        ]);

    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete() 
    {
        return $this->render('player/delete.html.twig', [

        ]);
    }
}
