<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Player;

class PlayerController extends AbstractController
{
    /**
     * @Route("/api/players", methods={"GET"})
     */
    public function index(): Response
    {
        // Récupérer la liste des produits depuis la base de données ou d'autres sources
        $products = $this->getDoctrine()->getRepository(Product::class)->findAll();

        // Retourner les produits en tant que réponse JSON
        return $this->json($products);
    }

    // Autres actions pour la création, la mise à jour et la suppression des produits...
}