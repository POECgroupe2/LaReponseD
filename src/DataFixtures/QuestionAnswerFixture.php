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
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question21'));
        $questionAnswer->setAnswer($this->getReference('answer72'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question21'));
        $questionAnswer->setAnswer($this->getReference('answer73'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question21'));
        $questionAnswer->setAnswer($this->getReference('answer74'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question21'));
        $questionAnswer->setAnswer($this->getReference('answer75'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 22
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question22'));
        $questionAnswer->setAnswer($this->getReference('answer76'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question22'));
        $questionAnswer->setAnswer($this->getReference('answer77'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question22'));
        $questionAnswer->setAnswer($this->getReference('answer78'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question22'));
        $questionAnswer->setAnswer($this->getReference('answer79'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 23
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question23'));
        $questionAnswer->setAnswer($this->getReference('answer80'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question23'));
        $questionAnswer->setAnswer($this->getReference('answer81'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question23'));
        $questionAnswer->setAnswer($this->getReference('answer82'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question23'));
        $questionAnswer->setAnswer($this->getReference('answer83'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 24
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question24'));
        $questionAnswer->setAnswer($this->getReference('answer84'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question24'));
        $questionAnswer->setAnswer($this->getReference('answer85'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question24'));
        $questionAnswer->setAnswer($this->getReference('answer86'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question24'));
        $questionAnswer->setAnswer($this->getReference('answer87'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        // question 25
        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question25'));
        $questionAnswer->setAnswer($this->getReference('answer88'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question25'));
        $questionAnswer->setAnswer($this->getReference('answer89'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question25'));
        $questionAnswer->setAnswer($this->getReference('answer90'));
        $questionAnswer->setIsGood(true);
        $manager->persist($questionAnswer);

        $questionAnswer = new QuestionAnswer();
        $questionAnswer->setQuestion($this->getReference('question25'));
        $questionAnswer->setAnswer($this->getReference('answer91'));
        $questionAnswer->setIsGood(false);
        $manager->persist($questionAnswer);
















        








        

        $manager->flush();
    }

   
    
    public function getOrder()
    {
        return 5;
    }
}
