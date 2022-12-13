<?php

namespace App\DataFixtures;

use App\Entity\Level;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class LevelFixture extends Fixture 
{
    public function load(ObjectManager $manager): void
    {
        $level = new Level();
        $level->setName('Débutant');
        $manager->persist($level);
        $this->addReference('level', $level);

        $level1 = new Level();
        $level1->setName('Intermédiaire');
        $manager->persist($level1);
        $this->addReference('level1', $level1);

        $level2 = new Level();
        $level2->setName('Expert');
        $manager->persist($level2);
        $this->addReference('level2', $level2);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}


