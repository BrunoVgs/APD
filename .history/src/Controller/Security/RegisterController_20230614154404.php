<?php

namespace App\Controller\Security;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator;

class RegisterController extends AbstractController
{

    /**
     * @Route("/register", name="register", methods={"POST"})
     */
    public function register(Request $request, UserRepository $userRepository): JsonResponse
    {
        // Récupérer les données d'inscription depuis la requête
        $data = json_decode($request->getContent(), true);

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail($data['email']);

        // Hacher le mot de passe
        $hashedPassword = $userRepository->encodePassword($user, $data['password']);
        $user->setPassword($hashedPassword);

        // Persiste l'utilisateur dans la base de données
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return new JsonResponse(['message' => 'User enregistré']);
    }
}
