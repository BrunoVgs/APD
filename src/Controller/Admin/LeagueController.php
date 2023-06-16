<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *  @Route("/back/league", name="app_back_league_")
 */
class LeagueController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('league/index.html.twig', [
            
        ]);
    }

    /**
     * function d'ajout d'une ligue
     *
     * @Route("/new", name="new", methods={"GET", "POST"})
     */
    public function new() : Response
    {
        return $this->render('league/new.html.twig', [

        ]);
    }

    /**
     * Undocumented function
     *
     * @Route("/{id}", name="show", methods={"GET"})
     */
    public function show():Response
    {
        return $this->render('league/show.html.twig', [

        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit()
    {
        return $this->render('league/edit.html.twig', [

        ]);

    }

    /**
     * 
     *
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete() 
    {
        return $this->render('league/delete.html.twig', [

        ]);
    }

}
