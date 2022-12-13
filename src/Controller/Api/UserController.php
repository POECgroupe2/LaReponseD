<?php

namespace App\Controller\Api;

use Exception;
use App\Entity\User;
use App\Repository\UserRepository;
use App\Controller\Api\ApiController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/api/users', name: 'api_users_')]
class UserController extends ApiController
{
    #[Route('', name: 'browse', methods: ['GET'])]
    public function browse(UserRepository $userRepository): JsonResponse
    {
        $allUser = $userRepository->findAll();

        return $this->json($allUser, Response::HTTP_OK, [] ,  ['groups' => 'api_users_browse'] );
    
     }        
            
           
    #[Route('/{id}', name: 'read', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function read(User $user, int $id = null): JsonResponse
    {
        if ($user === null) {
            
            return $this->json(
                [
                    "erreur" => "L'utilisateur n'a pas été trouvé",
                    "code_error" => 404
                ],
                Response::HTTP_NOT_FOUND, // 404
                
            );
        }
        return $this->json( $user, 200, [] ,  ['groups' => 'api_users_read'] );
            
           
      
    }
            
            
            
            
                
               
           
      
    
    #[Route('', name: 'add', methods: ['POST'])]
    public function add(
        Request $request,
        UserRepository $repo,
        SerializerInterface $serializerInterface,
        ValidatorInterface $validator,
        UserPasswordHasherInterface $hasher): JsonResponse
    {
        
        

        
        $jsonContent = $request->getContent();
        
        
        try 
        {
            /** @var User $newuser */
            $newUser = $serializerInterface->deserialize($jsonContent, User::class, 'json');
        }
        catch(Exception $e) 
        {
            
            return $this->json("Le JSON est mal formé", Response::HTTP_BAD_REQUEST);
        }
       // dd($newUser);

        
        $errors = $validator->validate($newUser);
        
        if (count($errors)> 0)
        {
            dd($errors);
            
            return $this->json($errors, Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        $plaintextPassword = $newUser->getPassword();
            
            $hashedPassword = $hasher->hashPassword(
                $newUser,
                $plaintextPassword
            );
            $newUser->setPassword($hashedPassword);

        $repo->save($newUser, true);


        
        return $this->json(
            
            $newUser,
            Response::HTTP_CREATED,
            [
                
                'Location' => $this->generateUrl('api_users_read', ['id' => $newUser->getId()])
            ],
            [
                
                "groups" =>"api_users_read"
               
            ]
                
                    
        );
    }

}
