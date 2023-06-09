<?php

namespace App\DataFixtures;

use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $player1 = new Player();
        $player1->setFirstName('Cristiano');
        $player1->setLastName('Ronaldo');
        $player1->setAge(25);
        $player1->setPosition('Attaquant');
        $manager->persist($player1);
    
        $player2 = new Player();
        $player2->setName('Jane Smith');
        $player2->setAge(28);
        $player2->setPosition('Défenseur');
        $manager->persist($player2);

        $manager->flush();
    }
}
