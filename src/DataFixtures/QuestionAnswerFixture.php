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
        // question 1
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question1'));
        $questionAnswer->setAnswer($this->getReference('answer'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question1'));
        $questionAnswer->setAnswer($this->getReference('answer1'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question1'));
        $questionAnswer->setAnswer($this->getReference('answer2'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question1'));
        $questionAnswer->setAnswer($this->getReference('answer3'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        // question 2
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question2'));
        $questionAnswer->setAnswer($this->getReference('answer4'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question2'));
        $questionAnswer->setAnswer($this->getReference('answer3'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question2'));
        $questionAnswer->setAnswer($this->getReference('answer2'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question2'));
        $questionAnswer->setAnswer($this->getReference('answer1'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 3
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question3'));
        $questionAnswer->setAnswer($this->getReference('answer3'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question3'));
        $questionAnswer->setAnswer($this->getReference('answer4'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question3'));
        $questionAnswer->setAnswer($this->getReference('answer10'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question3'));
        $questionAnswer->setAnswer($this->getReference('answer11'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);
        
        // question 4
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question4'));
        $questionAnswer->setAnswer($this->getReference('answer12'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question4'));
        $questionAnswer->setAnswer($this->getReference('answer13'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question4'));
        $questionAnswer->setAnswer($this->getReference('answer8'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question4'));
        $questionAnswer->setAnswer($this->getReference('answer9'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        // question 5
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question5'));
        $questionAnswer->setAnswer($this->getReference('answer11'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question5'));
        $questionAnswer->setAnswer($this->getReference('answer8'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question5'));
        $questionAnswer->setAnswer($this->getReference('answer12'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question5'));
        $questionAnswer->setAnswer($this->getReference('answer13'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 6
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question6'));
        $questionAnswer->setAnswer($this->getReference('answer9'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question6'));
        $questionAnswer->setAnswer($this->getReference('answer8'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question6'));
        $questionAnswer->setAnswer($this->getReference('answer12'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question6'));
        $questionAnswer->setAnswer($this->getReference('answer13'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        // question 7
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question7'));
        $questionAnswer->setAnswer($this->getReference('answer9'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question7'));
        $questionAnswer->setAnswer($this->getReference('answer8'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question7'));
        $questionAnswer->setAnswer($this->getReference('answer10'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question7'));
        $questionAnswer->setAnswer($this->getReference('answer11'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 8
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question8'));
        $questionAnswer->setAnswer($this->getReference('answer7'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question8'));
        $questionAnswer->setAnswer($this->getReference('answer6'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question8'));
        $questionAnswer->setAnswer($this->getReference('answer5'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question8'));
        $questionAnswer->setAnswer($this->getReference('answer30'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        // question 9
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question9'));
        $questionAnswer->setAnswer($this->getReference('answer21'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question9'));
        $questionAnswer->setAnswer($this->getReference('answer24'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question9'));
        $questionAnswer->setAnswer($this->getReference('answer31'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question9'));
        $questionAnswer->setAnswer($this->getReference('answer23'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 10
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question10'));
        $questionAnswer->setAnswer($this->getReference('answer26'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question10'));
        $questionAnswer->setAnswer($this->getReference('answer27'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question10'));
        $questionAnswer->setAnswer($this->getReference('answer28'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question10'));
        $questionAnswer->setAnswer($this->getReference('answer29'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 11
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question11'));
        $questionAnswer->setAnswer($this->getReference('answer32'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question11'));
        $questionAnswer->setAnswer($this->getReference('answer33'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question11'));
        $questionAnswer->setAnswer($this->getReference('answer34'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question11'));
        $questionAnswer->setAnswer($this->getReference('answer35'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 12
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question12'));
        $questionAnswer->setAnswer($this->getReference('answer36'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question12'));
        $questionAnswer->setAnswer($this->getReference('answer37'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question12'));
        $questionAnswer->setAnswer($this->getReference('answer38'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question12'));
        $questionAnswer->setAnswer($this->getReference('answer39'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 13
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question13'));
        $questionAnswer->setAnswer($this->getReference('answer40'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question13'));
        $questionAnswer->setAnswer($this->getReference('answer41'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question13'));
        $questionAnswer->setAnswer($this->getReference('answer42'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question13'));
        $questionAnswer->setAnswer($this->getReference('answer43'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 14
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question14'));
        $questionAnswer->setAnswer($this->getReference('answer44'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question14'));
        $questionAnswer->setAnswer($this->getReference('answer45'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question14'));
        $questionAnswer->setAnswer($this->getReference('answer46'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question14'));
        $questionAnswer->setAnswer($this->getReference('answer47'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 15
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question15'));
        $questionAnswer->setAnswer($this->getReference('answer48'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question15'));
        $questionAnswer->setAnswer($this->getReference('answer49'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question15'));
        $questionAnswer->setAnswer($this->getReference('answer50'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question15'));
        $questionAnswer->setAnswer($this->getReference('answer51'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 16
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question16'));
        $questionAnswer->setAnswer($this->getReference('answer52'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question16'));
        $questionAnswer->setAnswer($this->getReference('answer53'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question16'));
        $questionAnswer->setAnswer($this->getReference('answer54'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question16'));
        $questionAnswer->setAnswer($this->getReference('answer55'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        // question 17
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question17'));
        $questionAnswer->setAnswer($this->getReference('answer56'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question17'));
        $questionAnswer->setAnswer($this->getReference('answer57'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question17'));
        $questionAnswer->setAnswer($this->getReference('answer58'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question17'));
        $questionAnswer->setAnswer($this->getReference('answer59'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 18
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question18'));
        $questionAnswer->setAnswer($this->getReference('answer60'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question18'));
        $questionAnswer->setAnswer($this->getReference('answer61'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question18'));
        $questionAnswer->setAnswer($this->getReference('answer62'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question18'));
        $questionAnswer->setAnswer($this->getReference('answer63'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 19
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question19'));
        $questionAnswer->setAnswer($this->getReference('answer64'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question19'));
        $questionAnswer->setAnswer($this->getReference('answer65'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question19'));
        $questionAnswer->setAnswer($this->getReference('answer66'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question19'));
        $questionAnswer->setAnswer($this->getReference('answer67'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 20
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question20'));
        $questionAnswer->setAnswer($this->getReference('answer68'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question20'));
        $questionAnswer->setAnswer($this->getReference('answer69'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question20'));
        $questionAnswer->setAnswer($this->getReference('answer70'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question20'));
        $questionAnswer->setAnswer($this->getReference('answer71'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 21
















        








        

        $manager->flush();
    }

   
    
    public function getOrder()
    {
        return 5;
    }
}
