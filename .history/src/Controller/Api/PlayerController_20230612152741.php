<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Player;

class PlayerController extends AbstractController
{
    /**
     * @Route("/admin/players", name="app_back_players", methods={"GET"})
     */
    public function player(): Response
    {
        return $this->render('admin/players/index.html.twig');
    }

    /**
    * @Route("/admin/players", name="new", methods={"GET","POST"})
    */
    public function add(): Response
    {
        return $this->redirectToRoute('admin_players');
    }

    /**
    * @Route("/admin/player/{id}", name="edit", methods={"GET", "POST"})
    */
    public function edit(Request $request, $id): Response
    {
        return $this->redirectToRoute('admin_players');
    }

    /**
    * @Route("/admin/player/{id}", name="delete", methods={"POST"})
    */
    public function delete($id): Response
    {
        return $this->redirectToRoute('admin_players');
    }

    /**
    * @Route("/admin/player/{id}", name="show", methods={"GET"})
    */
    public function show(?Player $player): Response
    {
        if ($player === null) {
            throw $this->createNotFoundException("ce joueur n'existe pas");
        }

        return $this->render('admin/players/show.html.twig', [
            'player' => $player,
        ]);
    }
}