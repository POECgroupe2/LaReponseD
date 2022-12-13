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

        $answer30 = new Answer();
        $answer30->setContent('Christopher Nolan');
        $manager->persist($answer30);
        $this->addReference('answer30', $answer30);

        $answer31 = new Answer();
        $answer31->setContent('Jean-Pierre Jeunet');
        $manager->persist($answer31);
        $this->addReference('answer31', $answer31);

        $answer32 = new Answer();
        $answer32->setContent('Le pain de mie');
        $manager->persist($answer32);
        $this->addReference('answer32', $answer32);

        $answer33 = new Answer();
        $answer33->setContent('La ficelle');
        $manager->persist($answer33);
        $this->addReference('answer33', $answer33);

        $answer34 = new Answer();
        $answer34->setContent('La baguette');
        $manager->persist($answer34);
        $this->addReference('answer34', $answer34);

        $answer35 = new Answer();
        $answer35->setContent('Le pain de campagne');
        $manager->persist($answer35);
        $this->addReference('answer35', $answer35);

        $answer36 = new Answer();
        $answer36->setContent('La farine');
        $manager->persist($answer36);
        $this->addReference('answer36', $answer36);

        $answer37 = new Answer();
        $answer37->setContent('L\'oeuf');
        $manager->persist($answer37);
        $this->addReference('answer37', $answer37);

        $answer38 = new Answer();
        $answer38->setContent('L\'eau');
        $manager->persist($answer38);
        $this->addReference('answer38', $answer38);

        $answer39 = new Answer();
        $answer39->setContent('La levure');
        $manager->persist($answer39);
        $this->addReference('answer39', $answer39);

        $answer40 = new Answer();
        $answer40->setContent('Paris');
        $manager->persist($answer40);
        $this->addReference('answer40', $answer40);

        $answer41 = new Answer();
        $answer41->setContent('Strasbourg');
        $manager->persist($answer41);
        $this->addReference('answer41', $answer41);

        $answer42 = new Answer();
        $answer42->setContent('Lille');
        $manager->persist($answer42);
        $this->addReference('answer42', $answer42);

        $answer43 = new Answer();
        $answer43->setContent('Toulouse');
        $manager->persist($answer43);
        $this->addReference('answer43', $answer43);

        $answer44 = new Answer();
        $answer44->setContent('Le calisson');
        $manager->persist($answer44);
        $this->addReference('answer44', $answer44);

        $answer45 = new Answer();
        $answer45->setContent('La pâte de fruits');
        $manager->persist($answer45);
        $this->addReference('answer45', $answer45);

        $answer46 = new Answer();
        $answer46->setContent('Le nougat');
        $manager->persist($answer46);
        $this->addReference('answer46', $answer46);

        $answer47 = new Answer();
        $answer47->setContent('La guimauve');
        $manager->persist($answer47);
        $this->addReference('answer47', $answer47);

        $answer48 = new Answer();
        $answer48->setContent('Caen');
        $manager->persist($answer48);
        $this->addReference('answer48', $answer48);

        $answer49 = new Answer();
        $answer49->setContent('Le Mans');
        $manager->persist($answer49);
        $this->addReference('answer49', $answer49);

        $answer50 = new Answer();
        $answer50->setContent('Angoulème');
        $manager->persist($answer50);
        $this->addReference('answer50', $answer50);

        $answer51 = new Answer();
        $answer51->setContent('Lyon');
        $manager->persist($answer51);
        $this->addReference('answer51', $answer51);

        $answer52 = new Answer();
        $answer52->setContent('Les duchés');
        $manager->persist($answer52);
        $this->addReference('answer52', $answer52);

        $answer53 = new Answer();
        $answer53->setContent('Les boudoirs');
        $manager->persist($answer53);
        $this->addReference('answer53', $answer53);

        $answer54 = new Answer();
        $answer54->setContent('Les magdalas');
        $manager->persist($answer54);
        $this->addReference('answer54', $answer54);

        $answer55 = new Answer();
        $answer55->setContent('Les navettes');
        $manager->persist($answer55);
        $this->addReference('answer55', $answer55);

        $answer56 = new Answer();
        $answer56->setContent('Rhum');
        $manager->persist($answer56);
        $this->addReference('answer56', $answer56);

        $answer57 = new Answer();
        $answer57->setContent('Vodka');
        $manager->persist($answer57);
        $this->addReference('answer57', $answer57);

        $answer58 = new Answer();
        $answer58->setContent('Cognac');
        $manager->persist($answer58);
        $this->addReference('answer58', $answer58);

        $answer59 = new Answer();
        $answer59->setContent('Gin');
        $manager->persist($answer59);
        $this->addReference('answer59', $answer59);

        $answer60 = new Answer();
        $answer60->setContent('10 kg');
        $manager->persist($answer60);
        $this->addReference('answer60', $answer60);

        $answer61 = new Answer();
        $answer61->setContent('20 kg');
        $manager->persist($answer61);
        $this->addReference('answer61', $answer61);

        $answer62 = new Answer();
        $answer62->setContent('40 kg');
        $manager->persist($answer62);
        $this->addReference('answer62', $answer62);

        $answer63 = new Answer();
        $answer63->setContent('65 kg');
        $manager->persist($answer63);
        $this->addReference('answer63', $answer63);

        $answer64 = new Answer();
        $answer64->setContent('Le Cailladou');
        $manager->persist($answer64);
        $this->addReference('answer64', $answer64);

        $answer65 = new Answer();
        $answer65->setContent('La Cancoillotte');
        $manager->persist($answer65);
        $this->addReference('answer65', $answer65);

        $answer66 = new Answer();
        $answer66->setContent('L\'Écume de Wimereux');
        $manager->persist($answer66);
        $this->addReference('answer66', $answer66);

        $answer67 = new Answer();
        $answer67->setContent('La Mimolette');
        $manager->persist($answer67);
        $this->addReference('answer67', $answer67);

        $answer68 = new Answer();
        $answer68->setContent('La tarte au citron');
        $manager->persist($answer68);
        $this->addReference('answer68', $answer68);

        $answer69 = new Answer();
        $answer69->setContent('La tarte aux fraises');
        $manager->persist($answer69);
        $this->addReference('answer69', $answer69);

        $answer70 = new Answer();
        $answer70->setContent('La galette des rois');
        $manager->persist($answer70);
        $this->addReference('answer70', $answer70);

        $answer71 = new Answer();
        $answer71->setContent('L\'éclair au chocolat');
        $manager->persist($answer71);
        $this->addReference('answer71', $answer71);












        

        


        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }
}


        

        