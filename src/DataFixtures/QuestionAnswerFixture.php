<?php

namespace App\DataFixtures;

use App\Entity\QuestionAnswer;
use App\DataFixtures\AnswerFixture;
use App\DataFixtures\QuestionFixture;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class QuestionAnswerFixture extends Fixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager): void
    {
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question'));
        $questionAnswer->setAnswer($this->getReference('answer'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer1 = new QuestionAnswer();
        $questionAnswer1->setQuestion($this->getReference('question'));
        $questionAnswer1->setAnswer($this->getReference('answer1'));
        $questionAnswer1->setIsGood(false);
        $manager->persist($questionAnswer1);

        $questionAnswer2 = new QuestionAnswer();
        $questionAnswer2->setQuestion($this->getReference('question'));
        $questionAnswer2->setAnswer($this->getReference('answer2'));
        $questionAnswer2->setIsGood(false);
        $manager->persist($questionAnswer2);

        $questionAnswer3 = new QuestionAnswer();
        $questionAnswer3->setQuestion($this->getReference('question'));
        $questionAnswer3->setAnswer($this->getReference('answer3'));
        $questionAnswer3->setIsGood(true);
        $manager->persist($questionAnswer3);

        $questionAnswer4 = new QuestionAnswer();
        $questionAnswer4->setQuestion($this->getReference('question1'));
        $questionAnswer4->setAnswer($this->getReference('answer4'));
        $questionAnswer4->setIsGood(false);
        $manager->persist($questionAnswer4);

        $questionAnswer5 = new QuestionAnswer();
        $questionAnswer5->setQuestion($this->getReference('question1'));
        $questionAnswer5->setAnswer($this->getReference('answer3'));
        $questionAnswer5->setIsGood(false);
        $manager->persist($questionAnswer5);

        $questionAnswer6 = new QuestionAnswer();
        $questionAnswer6->setQuestion($this->getReference('question1'));
        $questionAnswer6->setAnswer($this->getReference('answer2'));
        $questionAnswer6->setIsGood(true);
        $manager->persist($questionAnswer6);

        $questionAnswer7 = new QuestionAnswer();
        $questionAnswer7->setQuestion($this->getReference('question1'));
        $questionAnswer7->setAnswer($this->getReference('answer1'));
        $questionAnswer7->setIsGood(false);
        $manager->persist($questionAnswer7);

        $questionAnswer8 = new QuestionAnswer();
        $questionAnswer8->setQuestion($this->getReference('question2'));
        $questionAnswer8->setAnswer($this->getReference('answer3'));
        $questionAnswer8->setIsGood(false);
        $manager->persist($questionAnswer8);

        $questionAnswer9 = new QuestionAnswer();
        $questionAnswer9->setQuestion($this->getReference('question2'));
        $questionAnswer9->setAnswer($this->getReference('answer4'));
        $questionAnswer9->setIsGood(true);
        $manager->persist($questionAnswer9);

        $questionAnswer10 = new QuestionAnswer();
        $questionAnswer10->setQuestion($this->getReference('question2'));
        $questionAnswer10->setAnswer($this->getReference('answer10'));
        $questionAnswer10->setIsGood(false);
        $manager->persist($questionAnswer10);

        $questionAnswer11 = new QuestionAnswer();
        $questionAnswer11->setQuestion($this->getReference('question2'));
        $questionAnswer11->setAnswer($this->getReference('answer11'));
        $questionAnswer11->setIsGood(false);
        $manager->persist($questionAnswer11);
        
        $questionAnswer12 = new QuestionAnswer();
        $questionAnswer12->setQuestion($this->getReference('question3'));
        $questionAnswer12->setAnswer($this->getReference('answer12'));
        $questionAnswer12->setIsGood(false);
        $manager->persist($questionAnswer12);

        $questionAnswer13 = new QuestionAnswer();
        $questionAnswer13->setQuestion($this->getReference('question3'));
        $questionAnswer13->setAnswer($this->getReference('answer13'));
        $questionAnswer13->setIsGood(false);
        $manager->persist($questionAnswer13);

        $questionAnswer14 = new QuestionAnswer();
        $questionAnswer14->setQuestion($this->getReference('question3'));
        $questionAnswer14->setAnswer($this->getReference('answer4'));
        $questionAnswer14->setIsGood(true);
        $manager->persist($questionAnswer14);

        






        

        $manager->flush();
    }

   
    
    public function getOrder()
    {
        return 5;
    }
}
