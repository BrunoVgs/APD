<?php

namespace App\Controller\Admin;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 *  @Route("/back/article", name="app_back_article_")
 */
class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('article/index.html.twig', [
            'controller_name' => 'ArticleController',
        ]);
    }

    /**
     * 
     * @Route("/new", name="new", methods={"GET", "POST"})   
     * 
     */
    public function new() : Response 

    {
        return $this->render('article/new.html.twig', [

        ]);
    }

    /**
     * Undocumented function
     *
     * @Route ("/{id}", name="show", methods={"GET"})
     */
    public function show() :Response

    {
        return $this->render('article/show.html.twig', [

        ]);
    }

    /**
     * @Route("/{id}/edit", name="edit", methods={"GET", "POST"})
     */
    public function edit()
    {
        return $this->render('article/edit.html.twig', [

        ]);

    }

    /**
     * @Route("/{id}", name="delete", methods={"POST"})
     */
    public function delete() 
    {
        return $this->render('article/delete.html.twig', [

        ]);
    }
}


