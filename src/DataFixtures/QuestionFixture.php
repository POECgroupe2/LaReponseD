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
        // Question cinéma
        $question = new Question();
        $question->setContent('Quel acteur interprète Spider-Man dans la série de films réalisés par Sam Raimi ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question1', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Aquaman dans la série de films réalisés par James Wan ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question2', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Jason Bourne dans la série de films réalisés par Paul Greengrass ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question3', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Christopher Nolan ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question4', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Tim Burton ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question5', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Joel Schumacher ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question6', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Matt Reeves ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question7', $question);

        $question = new Question();
        $question->setContent('Qui a réalisé le film "The Dark Knight Rises" ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question8', $question);

        $question = new Question();
        $question->setContent('Qui est le réalisateur du premier film de la saga Alien sorti en 1979 et intitulé Alien et le huitième passager ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question9', $question);

        $question = new Question();
        $question->setContent('Combien de films compte la saga Alien (sans compter les crossover) ?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question10', $question);


        // Question cuisine
        $question = new Question();
        $question->setContent('Quel est le pain le plus consommé en France ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question11', $question);

        $question = new Question();
        $question->setContent('Quel ingrédient de base n’entre pas dans la fabrication du pain classique ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question12', $question);

        $question = new Question();
        $question->setContent('Dans quelle ville le welsh est une spécialité ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question13', $question);

        $question = new Question();
        $question->setContent('À quelle confiserie est associée la ville de Montélimar ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question14', $question);

        $question = new Question();
        $question->setContent('On dit que les tripes sont à la mode de...');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question15', $question);

        $question = new Question();
        $question->setContent('Comment s\'appellent les biscuits Marseillais à la fleur d\'oranger qui remplacent les crêpes à la Chandeleur ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question16', $question);

        $question = new Question();
        $question->setContent('Quel alcool est utilisé dans la préparation d’un Mojito ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question17', $question);

        $question = new Question();
        $question->setContent('Quel est le poids d’une meule de Comté ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question18', $question);

        $question = new Question();
        $question->setContent('Lequel de ces fromages peut-on manger à la petite cuillère ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question19', $question);

        $question = new Question();
        $question->setContent('D’après un sondage, quelle est la pâtisserie préférée des Français ?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question20', $question);
        
















        

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
