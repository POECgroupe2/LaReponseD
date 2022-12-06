<?php

namespace App\DataFixtures;

use App\Entity\Question;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class QuestionFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $question = new Question();
        $question->setContent('Quel acteur interprète Spider-Man dans la série de films réalisés par Sam Raimi ?');
        $question->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level'));
        $manager->persist($question);

        $question1 = new Question();
        $question1->setContent('Quel acteur interprète Aquaman dans la série de films réalisés par James Wan ?');
        $question1->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level'));
        $manager->persist($question1);

        $question2 = new Question();
        $question2->setContent('Quel acteur interprète Jason Bourne dans la série de films réalisés par Paul Greengrass ?');
        $question2->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level'));
        $manager->persist($question2);

        $question3 = new Question();
        $question3->setContent('Quel acteur interprète Batman dans la série de films réalisés par Christopher Nolan ?');
        $question3->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level'));
        $manager->persist($question3);

        $question4 = new Question();
        $question4->setContent('Quel acteur interprète Batman dans la série de films réalisés par Tim Burton ?');
        $question4->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1'));
        $manager->persist($question4);

        $question5 = new Question();
        $question5->setContent('Quel acteur interprète Batman dans la série de films réalisés par Joel Schumacher ?');
        $question5->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1'));
        $manager->persist($question5);

        $question6 = new Question();
        $question6->setContent('Quel acteur interprète Batman dans la série de films réalisés par Matt Reeves ?');
        $question6->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1')); 
        $manager->persist($question6);

        $question7 = new Question();
        $question7->setContent('Qui a réalisé le film "The Dark Knight Rises" ?');
        $question7->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1'));
        $manager->persist($question7);

        $question8 = new Question();
        $question8->setContent('Qui est le réalisateur du premier film de la saga Alien sorti en 1979 et intitulé Alien et le huitième passager ?');
        $question8->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1'));
        $manager->persist($question8);

        $question9 = new Question();
        $question9->setContent('Combien de films compte la saga Alien (sans compter les crossover) ?');
        $question9->setCategory($this->getReference('cinema'));
        $question->addLevel($this->getReference('level1'));
        $manager->persist($question9);





        

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
