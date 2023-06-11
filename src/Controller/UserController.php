<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/admin/users",name="show users", methods={"GET"})
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Accès à la gestion des utilisateurs!',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
    /**
     * @Route("/admin/users",name="add users", methods={"POST"})
     */
    public function addUsers(): JsonResponse
    {
        return $this->json([
            'message' => 'Ajout d’un utilisateur',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
     /**
     * @Route("/admin/users/{id]",methods={"PUT"},requirements={"id"="\d+"})
     */
    public function updateUsers(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Modification d’un utilisateur spécifique',
            'path' => 'src/Controller/UserController.php',
        ]);
    }
      /**
     * @Route("/admin/users/{id]",methods={"DELETE"},requirements={"id"="\d+"})
     */
    public function deleteUsers(int $id): JsonResponse
    {
        return $this->json([
            'message' => 'Suppression d’un utilisateur spécifique',
            'path' => 'src/Controller/UserController.php',
        ]);
    }

}
