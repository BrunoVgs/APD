<?php

namespace App\Controller\admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/admin", name="app_back_default")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            
        ]);
    }
}
