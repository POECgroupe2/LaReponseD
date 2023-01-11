<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\QuestionRepository;
use App\Repository\AnswerRepository;
use App\Repository\QuestionAnswerRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_front_home')]
    public function index(
        QuestionRepository $questionRepository, AnswerRepository $answerRepository, QuestionAnswerRepository $questionAnswerRepository
    ): Response
    {
        return $this->render('front/home/index.html.twig', [
            'controller_name' => 'HomeController',
            //'questions' => $questionRepository->getRandomQuestions(),
        ]);
    }
}