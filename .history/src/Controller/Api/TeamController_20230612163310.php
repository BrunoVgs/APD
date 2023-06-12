<?php

namespace App\Controller\Api;

use App\Entity\Team;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManagerInterface;


class PlayerController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/api/teams", methods={"GET"})
     */
    public function listTeams(): Response
    {
        $teams = $this->entityManager->getRepository(Team::class)->findAll();
        $playerData = [];
        foreach ($players as $player) {
            $playerData[] = [
                'id' => $player->getId(),
                'firstName' => $player->getFirstname(),
                'lastName' => $player->getLastname(),
                'position' => $player->getPosition(),
                'age' => $player->getAge(),
                'height' => $player->getHeight(),
                'nationality' => $player->getNationality(),
            ];
        }

        return $this->json($playerData);
    }

    /**
     * @Route("/api/player/{id}", methods={"GET"})
     */
    public function findPlayer(int $id): Response
    {
        $player = $this->entityManager->getRepository(Player::class)->find($id);

        if (!$player) {
            return $this->json(['message' => 'Joueur non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $playerData = [
            'id' => $player->getId(),
            'firstName' => $player->getFirstname(),
            'lastName' => $player->getLastname(),
            'position' => $player->getPosition(),
            'age' => $player->getAge(),
            'height' => $player->getHeight(),
            'nationality' => $player->getNationality(),
        ];

        return $this->json($playerData);
    }
}
