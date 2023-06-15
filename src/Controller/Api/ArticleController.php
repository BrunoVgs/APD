<?php

namespace App\Controller\Api;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController extends AbstractController
{

    /**
     * @Route("/api/articles", methods={"GET"})
     */
    public function listArticles(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->getRepository(Article::class)->findAll();
        
        $articleData = [];
        foreach ($article as $article) {
            $articleData[] = [
                'id' => $article->getId(),
                'title' => $article->getTitle(),
                'content' => $article->getContent(),
                'created_at' => $article->getCreated_at(),
                'updated_at' => $article->getUpdated_at(),

            ];
        }

        return $this->json($articleData);
    }

    /**
     * @Route("/api/article/{id}", methods={"GET"})
     */
    public function findUser(int $id,ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->getRepository(Article::class)->find($id);

        if (!$article) {
            return $this->json(['message' => 'Article non trouvé'], Response::HTTP_NOT_FOUND);
        }

        $articleData = [
            'id' => $article->getId(),
            'title' => $article->getTitle(),
            'content' => $article->getContent(),
            'created_at' => $article->getCreated_at(),
            'updated_at' => $article->getUpdated_at(),
         
          
        ];

        return $this->json($articleData);
    }
}
