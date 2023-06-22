<?php

namespace App\Controller\Admin;


use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Controller Users pour la gestion des utilisateurs via l'espace admin

 */
class UserController extends AbstractController
{
    /**
     * @Route("/admin/users",name="show users", methods={"GET"})
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        $form = $this->createForm(UserType::class);
        if ($form->isSubmitted()) die('coucou');


        return $this->render('user/index.html.twig', [
            'form' => $form->createView(),
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
