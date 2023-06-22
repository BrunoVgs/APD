<?php

namespace App\Controller\Api;


use App\Entity\Player;
use App\Repository\PlayerRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{

    /**
     * @Route("/api/players", methods={"GET"})
     */
    public function listPlayers(PlayerRepository $playerRepository): Response
    {
        $players = $playerRepository->findAll();
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

    /*
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
*/

    /**
     * @Route("/api/players/search", methods={"GET"})
     * exemple d'utilisation : http://votresite.com/api/players/search?keyword=killian
     */
    public function searchPlayers(Request $request, PlayerRepository $playerRepository): JsonResponse
    {
    $keyword = $request->query->get('keyword');

    if (empty($keyword)) {
        return $this->json(['message' => 'Veuillez fournir un mot-clé'], Response::HTTP_BAD_REQUEST);
    }

    try {
        $players = $playerRepository->searchByName($keyword);
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
}

    /**
     * @Route("/api/players/search", methods={"GET"})
     * exemple d'utilisation : http://votresite.com/api/players/search?keyword=killian
     */
  /*  public function searchPlayers(Request $request)
    {
        // On récupère le param keyword dans la request

        // avec le keyword je vais utiliser une méthode custom de mon repository PlayerRepository, qui va faire une recheche en BDD dans ma
        // table players, en cherchant si keyword correspond soit au prénom, soit au nom


        // je retourne les résultats en json
    }
}
*/
}
?>