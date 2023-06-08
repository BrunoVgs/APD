<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JoueursController extends AbstractController
{
    /**
     * @Route("/admin/joueurs", name="admin_joueurs", methods={"GET"})
     */
    public function joueurs(): Response
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
}
