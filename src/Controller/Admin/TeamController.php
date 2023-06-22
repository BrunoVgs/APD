<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;




class TeamController extends AbstractController
{
    /**
     * @Route("/admin/equipes", name="app_back_equipes", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('team/index.html.twig', [
            
        ]);
    }

    /**
     * function d'ajout d'une equipe

     * @Route("/admin/new/equipe", name="new", methods={"GET", "POST"})

     */
    public function new() : Response
    {
        return $this->render('team/new.html.twig', [

        ]);
    }

    /**
     * Undocumented function
     *

     * @Route("/admin/equipe/{id}", name="show", methods={"GET"})

     */
    public function show():Response
    {
        return $this->render('team/show.html.twig', [

        ]);
    }

    /**

     * @Route("/admin/equipe/{id}/edit", name="edit", methods={"GET", "POST"})

     */
    public function edit()
    {
        return $this->render('team/edit.html.twig', [

        ]);

    }
    /**
     * 
     *
     * @Route("/admin/equipe/{id}", name="delete", methods={"POST"})

     */
    public function delete() 
    {
        return $this->render('team/delete.html.twig', [

        ]);
    }
}
