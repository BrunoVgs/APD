<?php

namespace App\Controller\Api;

use App\Entity\Team;
use App\Repository\TeamRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Doctrine\ORM\EntityManagerInterface;


class TeamController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/api/teams", methods={"GET"})
     */
    public function listTeams(TeamRepository $teamRepository): Response
    {
        $teams = $teamRepositorygetRepository(Team::class)->findAll();
        dd($teams);
        $teamData = [];
        foreach ($teams as $team) {
            $teamData[] = [
                'id' => $team->getId(),
            ];
        }

        return $this->json($teamData);
    }

    /**
     * @Route("/api/team/{id}", methods={"GET"})
     */
    public function findTeam(int $id): Response
    {
        $team = $this->entityManager->getRepository(Team::class)->find($id);

        if (!$team) {
            return $this->json(['message' => 'Equipe non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $teamData = [
            'id' => $team->getId(),
        ];

        return $this->json($teamData);
    }
}
