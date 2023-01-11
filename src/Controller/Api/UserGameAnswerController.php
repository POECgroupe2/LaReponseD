<?php

namespace App\Controller\Api;

use Exception;
use App\Entity\UserGameAnswer;
use App\Repository\UserGameAnswerRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/api/user/game/answer', name: 'api_user_game_answer_')]
class UserGameAnswerController extends AbstractController
{
    #[Route('', name: 'browse', methods: ['GET'])]
    public function browse(UserGameAnswerRepository $userGameAnswerRepository): JsonResponse
    {
        $allUserGameAnswer = $userGameAnswerRepository->findAll();

        return $this->json($allUserGameAnswer, Response::HTTP_OK, [] ,  ['groups' => 'api_user_game_answer_browse'] );
    
     }        

    #[Route('/{id}', name: 'read', methods: ['GET'], requirements: ['id' => '\d+'])]
     public function read(UserGameAnswer $userGameAnswer = null)
    {
        
        if ($userGameAnswer === null) {
            
            return $this->json(
                [
                    "erreur" => "Aucune donnée trouvée",
                    "code_error" => 404
                ],
                Response::HTTP_NOT_FOUND, // 404
                
            );
        }
        return $this->json(
            $userGameAnswer, 
             
            Response::HTTP_OK,
            
            [],
            
            [
                
                "groups" =>
                [
                    "api_user_game_answer_read"
                ]
            ]
        );
      
    }
    #[Route('', name: 'add', methods: ['POST'])]
    public function add(
        Request $request,
        UserGameAnswerRepository $repo,
        SerializerInterface $serializerInterface,
        ValidatorInterface $validator
        ): JsonResponse
    {
        
        

        
        $jsonContent = $request->getContent();
        // dd($jsonContent);
        
        try 
        {
            /** @var UserGameAnswer $newUserGameAnswer */
            $newUserGameAnswer = $serializerInterface->deserialize($jsonContent, UserGameAnswer::class, 'json');
        }
        catch(Exception $e) 
        {
            //dd($e);
            
            return $this->json("Le JSON est mal formé", Response::HTTP_BAD_REQUEST);
        }
       

        
        $errors = $validator->validate($newUserGameAnswer);
        
        if (count($errors)> 0)
        {
            //dd($errors);
            
            return $this->json($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        
        $repo->save($newUserGameAnswer, true);

        
        
        return $this->json(
            
            $newUserGameAnswer,
            Response::HTTP_CREATED,
            [
                
                'Location' => $this->generateUrl('api_user_game_answer_read', ['id' => $newUserGameAnswer->getId()])
            ],
            [
                
                "groups" =>"api_user_game_answer_read"
               
            ]
                
                    
        );
    }

}
