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

  