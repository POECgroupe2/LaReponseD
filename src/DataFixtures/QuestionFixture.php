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
        // Questions animaux
        // à venir...


        // Questions art
        // à venir...

        
        // Questions cinéma
        $question = new Question();
        $question->setContent('Quel acteur interprète Spider-Man dans la série de films réalisés par Sam Raimi&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question1', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Aquaman dans la série de films réalisés par James Wan&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question2', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Jason Bourne dans la série de films réalisés par Paul Greengrass&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question3', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Christopher Nolan&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question4', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Tim Burton&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question5', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Joel Schumacher&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question6', $question);

        $question = new Question();
        $question->setContent('Quel acteur interprète Batman dans la série de films réalisés par Matt Reeves&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question7', $question);

        $question = new Question();
        $question->setContent('Qui a réalisé le film "The Dark Knight Rises"&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question8', $question);

        $question = new Question();
        $question->setContent('Qui est le réalisateur du premier film de la saga Alien sorti en 1979 et intitulé "Alien et le huitième passager"&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question9', $question);

        $question = new Question();
        $question->setContent('Combien de films compte la saga Alien (sans compter les crossover)&nbsp;?');
        $question->setCategory($this->getReference('cinema'));
        $manager->persist($question);
        $this->addReference('question10', $question);


        // Questions cuisine
        $question = new Question();
        $question->setContent('Quel est le pain le plus consommé en France&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question11', $question);

        $question = new Question();
        $question->setContent('Quel ingrédient de base n’entre pas dans la fabrication du pain classique&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question12', $question);

        $question = new Question();
        $question->setContent('Dans quelle ville le welsh est-il une spécialité&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question13', $question);

        $question = new Question();
        $question->setContent('À quelle confiserie est associée la ville de Montélimar&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question14', $question);

        $question = new Question();
        $question->setContent('On dit que les tripes sont à la mode de...');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question15', $question);

        $question = new Question();
        $question->setContent('Comment s\'appellent les biscuits Marseillais à la fleur d\'oranger qui remplacent les crêpes à la Chandeleur&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question16', $question);

        $question = new Question();
        $question->setContent('Quel alcool est utilisé dans la préparation d’un Mojito&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question17', $question);

        $question = new Question();
        $question->setContent('Quel est le poids d’une meule de Comté&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question18', $question);

        $question = new Question();
        $question->setContent('Lequel de ces fromages peut-on manger à la petite cuillère&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question19', $question);

        $question = new Question();
        $question->setContent('D’après un sondage, quelle est la pâtisserie préférée des Français&nbsp;?');
        $question->setCategory($this->getReference('cuisine'));
        $manager->persist($question);
        $this->addReference('question20', $question);


        // Questions culture générale
        $question = new Question();
        $question->setContent('Quelle est la plus grande planète de notre système solaire&nbsp;?');
        $question->setCategory($this->getReference('cultureGen'));
        $manager->persist($question);
        $this->addReference('question21', $question);


        // Questions géographie
        // à venir...

        
        // Questions histoire
        $question = new Question();
        $question->setContent('Qui était le Président de la République Française en 1971&nbsp;?');
        $question->setCategory($this->getReference('histoire'));
        $manager->persist($question);
        $this->addReference('question23', $question);

        $question = new Question();
        $question->setContent('Lequel de ces noms n\'est pas celui d\'un des bateaux de Christophe Colomb lors de sa "découverte" de l\'Amérique&nbsp;?');
        $question->setCategory($this->getReference('histoire'));
        $manager->persist($question);
        $this->addReference('question24', $question);


        // Questions informatique
        // à venir...

        
        // Questions jeux vidéo
        // à venir...

        
        // Questions littérature
        // à venir...

        
        // Questions musique
        $question = new Question();
        $question->setContent('De quel groupe musical Rob Bourdon est-il le batteur&nbsp;?');
        $question->setCategory($this->getReference('musique'));
        $manager->persist($question);
        $this->addReference('question22', $question);


        // Questions séries TV
        // à venir...

        
        // Questions sport
        $question = new Question();
        $question->setContent('Quand est décédé Ayrton Senna&nbsp;?');
        $question->setCategory($this->getReference('sport'));
        $manager->persist($question);
        $this->addReference('question25', $question);
        
















        

        $manager->flush();
    }

    public function getOrder()
    {
        return 4;
    }
}
