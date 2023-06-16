<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LeagueController extends AbstractController
{
    /**
     * @Route("/admin/league",name="show league", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('league/index.html.twig', [
            'controller_name' => 'LeagueController',
        ]);
    }

    /**
     * @Route("/admin/league",name="add league", methods={"POST"})
     */
    public function addLeague(): Response
    {
        return $this->render('league/index.html.twig', [
            'controller_name' => 'LeagueController',
        ]);
    }

    /**
     * @Route("/admin/league/{id]",name="update league",methods={"PUT"},requirements={"id"="\d+"})
     */
    public function updateLeague(int $id): Response
    {
        return $this->render('league/index.html.twig', [
            'controller_name' => 'LeagueController',
        ]);
    }


    /**
     * @Route("/admin/league/{id]",name="delete league",methods={"DELETE"},requirements={"id"="\d+"})
     */
    public function deleteLeague(int $id): Response
    {
        return $this->render('league/index.html.twig', [
            'controller_name' => 'LeagueController',
        ]);
    }
}
