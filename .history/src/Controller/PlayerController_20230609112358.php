<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    /**
     * @Route("/admin/joueurs", name="admin_joueurs", methods={"GET"})
     */
    public function player(): Response
    {
        return $this->render('admin/joueurs/index.html.twig');
    }

    /**
    * @Route("/admin/joueurs", name="admin_joueurs", methods={"POST"})
    */
    public function add(): Response
    {
        return $this->redirectToRoute('admin_joueurs');
    }

    /**
    * @Route("/admin/joueurs/{id}", name="admin_joueur_edit", methods={"PUT"})
    */
    public function edit(Request $request, $id): Response
    {
        return $this->redirectToRoute('admin_joueurs');
    }

    /**
    * @Route("/admin/joueurs/{id}", name="admin_joueurs_delete", methods={"DELETE"})
    */
    public function delete($id): Response
    {
        return $this->redirectToRoute('admin_joueurs');
    }

    public function show(?Player $player): Response
    {
        if ($player === null){throw $this->createNotFoundException("ce joueur n'existe pas");}

        return $this->render('back/movie/show.html.twig', [
            'player' => $player,
        ]);
    }
}
