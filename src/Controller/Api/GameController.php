<?php

namespace App\Controller\Api;

use Exception;
use App\Entity\Game;
use App\Controller\Api\ApiController;
use App\Repository\GameRepository;
use App\Repository\QuestionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GameController extends ApiController
{
    #[Route('/api/games', name: 'api_games_')]
    public function browse(QuestionRepository $questionRepository): JsonResponse
    {
        return $this->json($questionRepository->getRandomQuestions(), 200, [], ['groups' => 'api_game']);
    }

    #[Route('', name: 'add', methods: ['POST'])]
    public function add(
        Request $request,
        GameRepository $repo,
        SerializerInterface $serializerInterface,
        ValidatorInterface $validator
        ): JsonResponse
    {
        
        

        
        $jsonContent = $request->getContent();
        // dd($jsonContent);
        
        try 
        {
            /** @var Game $game */
            $game = $serializerInterface->deserialize($jsonContent, Game::class, 'json');
        }
        catch(Exception $e) 
        {
            //dd($e);
            
            return $this->json("Le JSON est mal formé", Response::HTTP_BAD_REQUEST);
        }
       

        
        $errors = $validator->validate($game);
        
        if (count($errors)> 0)
        {
            //dd($errors);
            
            return $this->json($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        
        $repo->save($game, true);

        
        
        return $this->json(
            
            $game,
            Response::HTTP_CREATED,
            [
                
                'Location' => $this->generateUrl('api_game_read', ['id' => $game->getId()])
            ],
            [
                
                "groups" =>"api_game_read"
               
            ]
                
                    
        );
    }

}