<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class CategoryFixture extends Fixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $cuisine = new Category();
        $cuisine->setName('Cuisine');
        $manager->persist($cuisine);
        $this->addReference('cuisine', $cuisine);

        $cinema = new Category();
        $cinema->setName('Cinema');
        $manager->persist($cinema);
        $this->addReference('cinema', $cinema);        

        $sport = new Category();
        $sport->setName('Sport');
        $manager->persist($sport);
        $this->addReference('sport', $sport);

        $musique = new Category();
        $musique->setName('Musique');
        $manager->persist($musique);
        $this->addReference('musique', $musique);

        $histoire = new Category();
        $histoire->setName('Histoire');
        $manager->persist($histoire);
        $this->addReference('histoire', $histoire);

        $geographie = new Category();
        $geographie->setName('Geographie');
        $manager->persist($geographie);
        $this->addReference('geographie', $geographie);

        $animaux = new Category();
        $animaux->setName('Animaux');
        $manager->persist($animaux);
        $this->addReference('animaux', $animaux);

        $informatique = new Category();
        $informatique->setName('Informatique');
        $manager->persist($informatique);
        $this->addReference('informatique', $informatique);

        $jeuxVideo = new Category();
        $jeuxVideo->setName('Jeux Video');
        $manager->persist($jeuxVideo);
        $this->addReference('jeuxVideo', $jeuxVideo);

        $serieTv = new Category();
        $serieTv->setName('Serie TV');
        $manager->persist($serieTv);
        $this->addReference('serieTv', $serieTv);

        $litterature = new Category();
        $litterature->setName('Litterature');
        $manager->persist($litterature);
        $this->addReference('litterature', $litterature);

        $art = new Category();
        $art->setName('Art');
        $manager->persist($art);
        $this->addReference('art', $art);

        $manager->flush();
    }

    public function getOrder()
    {
        return 2;
    }
}
