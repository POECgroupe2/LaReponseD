<?php

namespace App\Controller\Api;

use App\Repository\QuestionRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends AbstractController
{
    #[Route('/api/game', name: 'api_game')]
    public function browse(QuestionRepository $questionRepository): JsonResponse
    {
        return $this->json($questionRepository->getRandomQuestions(), 200, [], ['groups' => 'front']);
    }
}