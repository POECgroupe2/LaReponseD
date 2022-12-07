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
        $this->addReference('answer', $answer);
        
        $answer1 = new Answer();
        $answer1->setContent('Jason Statham');
        $manager->persist($answer1);
        $this->addReference('answer1', $answer1);

        $answer2 = new Answer();
        $answer2->setContent('Jason Momoa');
        $manager->persist($answer2);
        $this->addReference('answer2', $answer2);

        $answer3 = new Answer();
        $answer3->setContent('Tobey Maguire');
        $manager->persist($answer3);
        $this->addReference('answer3', $answer3);

        $answer4 = new Answer();
        $answer4->setContent('Matt Damon');
        $manager->persist($answer4);
        $this->addReference('answer4', $answer4);

        $answer5 = new Answer();    
        $answer5->setContent('Paul Greengrass');    
        $manager->persist($answer5);
        $this->addReference('answer5', $answer5);

        $answer6 = new Answer();
        $answer6->setContent('James Wan');
        $manager->persist($answer6);
        $this->addReference('answer6', $answer6);

        $answer7 = new Answer();
        $answer7->setContent('Sam Raimi');
        $manager->persist($answer7);
        $this->addReference('answer7', $answer7);

        $answer8 = new Answer();
        $answer8->setContent('Ben Affleck');
        $manager->persist($answer8);
        $this->addReference('answer8', $answer8);

        $answer9 = new Answer();
        $answer9->setContent('Christian Bale');
        $manager->persist($answer9);
        $this->addReference('answer9', $answer9);

        $answer10 = new Answer();
        $answer10->setContent('Robert Pattinson');
        $manager->persist($answer10);
        $this->addReference('answer10', $answer10);

        $answer11 = new Answer();
        $answer11->setContent('Michael Keaton');
        $manager->persist($answer11);
        $this->addReference('answer11', $answer11);

        $answer12 = new Answer();
        $answer12->setContent('George Clooney');
        $manager->persist($answer12);
        $this->addReference('answer12', $answer12);

        $answer13 = new Answer();
        $answer13->setContent('Val Kilmer');
        $manager->persist($answer13);
        $this->addReference('answer13', $answer13);

        $answer14 = new Answer();
        $answer14->setContent('Adam West');
        $manager->persist($answer14);
        $this->addReference('answer14', $answer14);

        $answer15 = new Answer();
        $answer15->setContent('Bruce Wayne');
        $manager->persist($answer15);
        $this->addReference('answer15', $answer15);

        $answer16 = new Answer();
        $answer16->setContent('Batman');
        $manager->persist($answer16);
        $this->addReference('answer16', $answer16);

        $answer17 = new Answer();
        $answer17->setContent('Superman');
        $manager->persist($answer17);
        $this->addReference('answer17', $answer17);

        $answer18 = new Answer();
        $answer18->setContent('Clark Kent');
        $manager->persist($answer18);
        $this->addReference('answer18', $answer18);

        $answer19 = new Answer();
        $answer19->setContent('Terminator');
        $manager->persist($answer19);
        $this->addReference('answer19', $answer19);

        $answer20 = new Answer();
        $answer20->setContent('Arnold Schwarzenegger');
        $manager->persist($answer20);
        $this->addReference('answer20', $answer20);

        $answer21 = new Answer();
        $answer21->setContent('James Cameron');
        $manager->persist($answer21);
        $this->addReference('answer21', $answer21);

        $answer22 = new Answer();
        $answer22->setContent('Steven Spielberg');
        $manager->persist($answer22);
        $this->addReference('answer22', $answer22);

        $answer23 = new Answer();
        $answer23->setContent('David Fincher');
        $manager->persist($answer23);
        $this->addReference('answer23', $answer23);

        $answer24 = new Answer();
        $answer24->setContent('Ridley Scott');
        $manager->persist($answer24);
        $this->addReference('answer24', $answer24);

        $answer25 = new Answer();
        $answer25->setContent('Martin Scorsese');
        $manager->persist($answer25);
        $this->addReference('answer25', $answer25);

        $answer26 = new Answer();
        $answer26->setContent('5');
        $manager->persist($answer26);
        $this->addReference('answer26', $answer26);

        $answer27 = new Answer();
        $answer27->setContent('6');
        $manager->persist($answer27);
        $this->addReference('answer27', $answer27);

        $answer28 = new Answer();
        $answer28->setContent('7');
        $manager->persist($answer28);
        $this->addReference('answer28', $answer28);

        $answer29 = new Answer();
        $answer29->setContent('8');
        $manager->persist($answer29);
        $this->addReference('answer29', $answer29);



        

        


        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}


        

        