<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("admin/utilisateurs", name="app_back_user", method={"GET"})
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
          
        ]);
    }

    /**
     * 
     * @Route("/admin/new/utilisateur", name="new", methods={"GET", "POST"})   
     * 
     */
    public function new() : Response 

    {
        return $this->render('user/new.html.twig', [

        ]);
    }

    /**
     * Undocumented function
     *
     * @Route ("/admin/utilisateur/{id}", name="show", methods={"GET"})
     */
    public function show() :Response

    {
        return $this->render('user/show.html.twig', [

        ]);
    }

    /**
     * @Route("/admin/utilisateur/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit()
    {
        return $this->render('user/edit.html.twig', [

        ]);

    }

    /**
     * 
     *
     * @Route("/admin/utilisateur/{id}", name="delete", methods={"POST"})
     */
    public function delete() 
    {
        return $this->render('user/delete.html.twig', [

        ]);
    }
}
