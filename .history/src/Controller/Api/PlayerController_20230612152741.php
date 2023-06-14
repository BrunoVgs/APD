<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Player;


/**
 *  @Route("/back/player", name="app_back_player_")
 */
class PlayerController extends AbstractController
{
    /**
     * @Route("/", name="index", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('player/index.html.twig');
    }

    /**
    * @Route("/new", name="new", methods={"GET","POST"})
    */
    public function new(): Response
    {
        return $this->redirectToRoute('player/new.html.twig');
    }

    /**
    * @Route("/{id}", name="edit", methods={"GET", "POST"})
    */
    public function edit(Request $request, $id): Response
    {
        return $this->redirectToRoute('player/edit.html.twig');
    }

    /**
    * @Route("/{id}", name="delete", methods={"POST"})
    */
    public function delete($id): Response
    {
        return $this->redirectToRoute('player/delete.html.twig');
    }

    /**
    * @Route("/{id}", name="show", methods={"GET"})
    */
    public function show(?Player $player): Response
    {
        if ($player === null) {
            throw $this->createNotFoundException("ce joueur n'existe pas");
        }

        return $this->render('player/show.html.twig', [
            'player' => $player,
        ]);
    }
}