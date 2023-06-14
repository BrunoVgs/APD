<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller Users pour la gestion des utilisateurs via l'espace admin
 */
class UserController extends AbstractController
{
    /**
     * @Route("/admin/users",name="app_back_users", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Accès à la gestion des utilisateurs!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
    /**
     * @Route("/admin/users",name="add users", methods={"POST"})
     */
    public function addUsers(): Response
    {
        return $this->json([
            'message' => 'Ajout d’un utilisateur',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
     /**
     * @Route("/admin/users/{id]",methods={"PUT"},requirements={"id"="\d+"})
     */
    public function updateUsers(): Response
    {
        return $this->json([
            'message' => 'Modification d’un utilisateur spécifique',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
      /**
     * @Route("/admin/users/{id]",methods={"DELETE"},requirements={"id"="\d+"})
     */
    public function deleteUsers(): Response
    {
        return $this->render('user/edit.html.twig[
            
        ]);
    }

}
