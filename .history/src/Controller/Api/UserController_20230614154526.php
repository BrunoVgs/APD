<?php

namespace App\Controller\Api;

use App\Entity\User;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;


class UserController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/api/users", methods={"GET"})
     */
    public function listUser(UserRepository $userRepository): Response
    {
        $user = $userRepository->getRepository(User::class)->findAll();
        
        $userData = [];
        foreach ($user as $user) {
            $userData[] = [
                'id' => $user->getId(),
                'name' => $user->getName(),
                'role' => $user->getRole(),
                'avatar' => $user->getAvatar(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
            ];
        }

        return $this->json($userData);
    }

    /**
     * @Route("/api/user/{id}", methods={"GET"})
     */
    public function findUser(int $id,UserRepository $userRepository): Response
    {
        $user = $userRepository->getRepository(User::class)->find($id);

        if (!$user) {
            return $this->json(['message' => 'Utilisateur non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $userData = [
            'id' => $user->getId(),
            'name' => $user->getName(),
            'role' => $user->getRole(),
            'avatar' => $user->getAvatar(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
        ];

        return $this->json($userData);
    }
}
