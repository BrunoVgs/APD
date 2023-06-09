<?php

namespace App\DataFixtures;

use App\Entity\Team;
use App\Entity\Player;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PlayerFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $team = new Team();
        $team->setName('Team A');
        $team->setCity('Oclock');
        $team->setStadium('Oclock Arena');
        $manager->persist($team);

        $player1 = new Player();
        $player1->setTeam($team);
        $player1->setFirstName('Cristiano');
        $player1->setLastName('Ronaldo');
        $player1->setNationality('Portugal');
        $player1->setPosition('Forward');
        $player1->setAge(36);
        $player1->setHeight(187);
        $manager->persist($player1);
        $player1->setCreatedAtValue();

        $player2 = new Player();
        $player2->setTeam($team);
        $player2->setFirstName('Lionel');
        $player2->setLastName('Messi');
        $player2->setNationality('Argentina');
        $player2->setPosition('Forward');
        $player2->setAge(34);
        $player2->setHeight(170);
        $manager->persist($player2);
        $player2->setCreatedAtValue();

        $player3 = new Player();
        $player3->setTeam($team);
        $player3->setFirstName('Neymar');
        $player3->setLastName('Jr');
        $player3->setNationality('Brazil');
        $player3->setPosition('Forward');
        $player3->setAge(29);
        $player3->setHeight(175);
        $manager->persist($player3);

        $player4 = new Player();
        $player4->setTeam($team);
        $player4->setFirstName('Kevin');
        $player4->setLastName('De Bruyne');
        $player4->setNationality('Belgium');
        $player4->setPosition('Midfielder');
        $player4->setAge(30);
        $player4->setHeight(181);
        $manager->persist($player4);

        $player5 = new Player();
        $player5->setTeam($team);
        $player5->setFirstName('Virgil');
        $player5->setLastName('van Dijk');
        $player5->setNationality('Netherlands');
        $player5->setPosition('Defender');
        $player5->setAge(30);
        $player5->setHeight(193);
        $manager->persist($player5);

        $player6 = new Player();
        $player6->setTeam($team);
        $player6->setFirstName('Kylian');
        $player6->setLastName('Mbappé');
        $player6->setNationality('France');
        $player6->setPosition('Forward');
        $player6->setAge(22);
        $player6->setHeight(178);
        $manager->persist($player6);

        $player7 = new Player();
        $player7->setTeam($team);
        $player7->setFirstName('Robert');
        $player7->setLastName('Lewandowski');
        $player7->setNationality('Poland');
        $player7->setPosition('Forward');
        $player7->setAge(32);
        $player7->setHeight(185);
        $manager->persist($player7);

        $player8 = new Player();
        $player8->setTeam($team);
        $player8->setFirstName('Sergio');
        $player8->setLastName('Ramos');
        $player8->setNationality('Spain');
        $player8->setPosition('Defender');
        $player8->setAge(35);
        $player8->setHeight(184);
        $manager->persist($player8);

        $player9 = new Player();
        $player9->setTeam($team);
        $player9->setFirstName('Mohamed');
        $player9->setLastName('Salah');
        $player9->setNationality('Egypt');
        $player9->setPosition('Forward');
        $player9->setAge(28);
        $player9->setHeight(175);
        $manager->persist($player9);

        $player10 = new Player();
        $player10->setTeam($team);
        $player10->setFirstName('Manuel');
        $player10->setLastName('Neuer');
        $player10->setNationality('Germany');
        $player10->setPosition('Goalkeeper');
        $player10->setAge(35);
        $player10->setHeight(193);
        $manager->persist($player10);

        $manager->flush();
    }
}
