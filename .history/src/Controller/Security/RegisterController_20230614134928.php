<?php

namespace App\Controller\Security;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Entity\User;

class UserController extends AbstractController
{
    private $passwordEncoder;
    private $jwtManager;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder, JWTTokenManagerInterface $jwtManager)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->jwtManager = $jwtManager;
    }

    public function register(Request $request): JsonResponse
    {
        // Récupérer les données d'inscription depuis la requête
        $data = json_decode($request->getContent(), true);

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail($data['email']);

        // Hacher le mot de passe
        $hashedPassword = $this->passwordEncoder->encodePassword($user, $data['password']);
        $user->setPassword($hashedPassword);

        // Persiste l'utilisateur dans la base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return new JsonResponse(['message' => 'User registered successfully']);
    }

    public function login(Request $request): JsonResponse
    {
        // Récupérer les informations d'identification depuis la requête
        $data = json_decode($request->getContent(), true);
        $email = $data['email'];
        $password = $data['password'];

        // Récupérer l'utilisateur correspondant depuis la base de données
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        $user = $userRepository->findOneBy(['email' => $email]);

        if (!$user || !$this->passwordEncoder->isPasswordValid($user, $password)) {
            // Les informations d'identification sont invalides
            return new JsonResponse(['message' => 'Invalid credentials'], 401);
        }

        // Générer le token JWT
        $token = $this->jwtManager->create($user);

        return new JsonResponse(['token' => $token]);
    }

    public function profile(): JsonResponse
    {
        // Récupérer l'utilisateur connecté
        $user = $this->getUser();

        // Retourner les informations du profil de l'utilisateur
        return new JsonResponse(['email' => $user->getEmail()]);
    }
}
