<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



/**
 * @Route("/back/user", name="app_back_user_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
          
        ]);
    }

    /**
     * 
     * @Route("/new", name="new", methods={"GET", "POST"})   
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
     * @Route ("/{id}", name="show", methods={"GET"})
     */
    public function show() :Response

    {
        return $this->render('user/show.html.twig', [

        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit()
    {
        return $this->render('user/edit.html.twig', [

        ]);

    }

    /**
     * 
     *
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete() 
    {
        return $this->render('user/delete.html.twig', [

        ]);
    }
}
