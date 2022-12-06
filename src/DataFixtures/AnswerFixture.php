<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class AnswerFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $answer = new Answer();
        $answer->setContent('Ben Foster');
        $manager->persist($answer);
        
        $answer1 = new Answer();
        $answer1->setContent('Jason Statham');
        $manager->persist($answer1);

        $answer2 = new Answer();
        $answer2->setContent('Jason Momoa');
        $manager->persist($answer2);

        $answer3 = new Answer();
        $answer3->setContent('Tobey Maguire');
        $manager->persist($answer3);

        $answer4 = new Answer();
        $answer4->setContent('Matt Damon');
        $manager->persist($answer4);

        $answer5 = new Answer();    
        $answer5->setContent('Paul Greengrass');    
        $manager->persist($answer5);

        $answer6 = new Answer();
        $answer6->setContent('James Wan');
        $manager->persist($answer6);

        $answer7 = new Answer();
        $answer7->setContent('Sam Raimi');
        $manager->persist($answer7);

        $answer8 = new Answer();
        $answer8->setContent('Ben Affleck');
        $manager->persist($answer8);

        $answer9 = new Answer();
        $answer9->setContent('Christian Bale');
        $manager->persist($answer9);

        $answer10 = new Answer();
        $answer10->setContent('Robert Pattinson');
        $manager->persist($answer10);

        $answer11 = new Answer();
        $answer11->setContent('Michael Keaton');
        $manager->persist($answer11);

        $answer12 = new Answer();
        $answer12->setContent('George Clooney');
        $manager->persist($answer12);

        $answer13 = new Answer();
        $answer13->setContent('Val Kilmer');
        $manager->persist($answer13);

        $answer14 = new Answer();
        $answer14->setContent('Adam West');
        $manager->persist($answer14);

        $answer15 = new Answer();
        $answer15->setContent('Bruce Wayne');
        $manager->persist($answer15);

        $answer16 = new Answer();
        $answer16->setContent('Batman');
        $manager->persist($answer16);

        $answer17 = new Answer();
        $answer17->setContent('Superman');
        $manager->persist($answer17);

        $answer18 = new Answer();
        $answer18->setContent('Clark Kent');
        $manager->persist($answer18);

        $answer19 = new Answer();
        $answer19->setContent('Terminator');
        $manager->persist($answer19);

        $answer20 = new Answer();
        $answer20->setContent('Arnold Schwarzenegger');
        $manager->persist($answer20);

        $answer21 = new Answer();
        $answer21->setContent('James Cameron');
        $manager->persist($answer21);

        $answer22 = new Answer();
        $answer22->setContent('Steven Spielberg');
        $manager->persist($answer22);

        $answer23 = new Answer();
        $answer23->setContent('David Fincher');
        $manager->persist($answer23);

        $answer24 = new Answer();
        $answer24->setContent('Ridley Scott');
        $manager->persist($answer24);

        $answer25 = new Answer();
        $answer25->setContent('Martin Scorsese');
        $manager->persist($answer25);

        $answer26 = new Answer();
        $answer26->setContent('5');
        $manager->persist($answer26);

        $answer27 = new Answer();
        $answer27->setContent('6');
        $manager->persist($answer27);

        $answer28 = new Answer();
        $answer28->setContent('7');
        $manager->persist($answer28);

        $answer29 = new Answer();
        $answer29->setContent('8');
        $manager->persist($answer29);



        

        


        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}


        

        