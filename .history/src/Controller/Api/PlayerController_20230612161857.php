<?php

namespace App\Controller\Api;

use App\Entity\Player;
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
     * @Route("/api/players", methods={"GET"})
     */
    public function index(): Response
    {
        $players = $this->entityManager->getRepository(Player::class)->findAll();
                // Compile the data into an array
                $playerData = [];
                foreach ($players as $player) {
                    $playerData[] = [
                        'id' => $player->getId(),
                        'firstName' => $player->getFirstName(),
                        'lastName' => $player->getLastName(),
                        // Add other properties as needed
                    ];
                }
        return $this->json($players);
    }
}
