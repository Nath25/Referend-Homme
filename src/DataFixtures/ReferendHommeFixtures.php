<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\User;
use App\Entity\Event;
use App\Entity\Place;
use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ReferendHommeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
// Utilisateurs
        $user = new User();
        $user   ->setName('Gregory PETIT')
                ->setEmail('greg@president.universe')
                ->setPassword('wilder')
                ->setRole(['ROLE_ADMIN'])
                ->setAdress('1 rue de la Chèvre')
                ->setZipCode(40000)
                ->setCity('EFFESCEAU')
                ->setStatus(5);
        $manager->persist($user);

        $user1 = new User();
        $user1  ->setName('Clélia MANDONNET')
                ->setEmail('clelia@wild.fr')
                ->setPassword('wilder')
                ->setRole(['ROLE_USER'])
                ->setAdress('1 rue du Paradis')
                ->setZipCode(69000)
                ->setCity('LYON')
                ->setStatus(0);
        $manager->persist($user1);

        $user2 = new User();
        $user2  ->setName('Nathalie CORTES')
                ->setEmail('nath@wild.fr')
                ->setPassword('wilder')
                ->setRole(['ROLE_USER'])
                ->setAdress('Impasse Php')
                ->setZipCode(40000)
                ->setCity('EFFESCEAU')
                ->setStatus(3);
        $manager->persist($user2);

        $user3 = new User();
        $user3  ->setName('Elliot BOBILLET')
                ->setEmail('elliot@wild.fr')
                ->setPassword('wilder')
                ->setRole(['ROLE_USER'])
                ->setAdress('666 rue du diable')
                ->setZipCode(40000)
                ->setCity('EFFESCEAU')
                ->setStatus(1);
        $manager->persist($user3);

// Project 1
        $project = new Project();
        $project    ->setTitle('Parc pour Enfants')
                    ->setDescription("")
                    ->setDateStart("2019-06-27")
                    ->setDateEnd("2019-12-31")
                    ->setBudget(25000)
                    ->setImgProject("https://image.noelshack.com/fichiers/2019/26/5/1561683943-image-1.png");
        $manager->persist($project);

        $place = new Place();
        $place      ->setAdress('Place du Centre')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project);
        $manager->persist($place);

        $place1 = new Place();
        $place1     ->setAdress('Square Greg')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project);
        $manager->persist($place1);

        $place2 = new Place();
        $place2     ->setAdress('Marché Aribo')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project);
        $manager->persist($place2);

        $event = new Event();
        $event      ->setName("Réunion Publique d'information")
                    ->setDescription("Proposition des maquettes")
                    ->setDateEvent('2019/06/28')
                    ->setProject($project);
        $manager->persist($event);

        $event = new Event();
        $event      ->setName("Débat des Vieux Garçons")
                    ->setDescription("")
                    ->setDateEvent('2019/06/28')
                    ->setProject($project);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Lieu 1 : Place du Centre")
                    ->setProject($project);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Lieu 2 : Square Greg")
                    ->setProject($project);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Lieu 3 : Marché Aribo")
                    ->setProject($project);
        $manager->persist($news);

// Project2
        $project1 = new Project();
        $project1   ->setTitle('Piscine Olym-qui-pique')
                    ->setDescription('blabla glouglou')
                    ->setDateStart('2019/04/27')
                    ->setDateEnd('2019/07/15')
                    ->setBudget(5000000)
                    ->setImgProject('https://image.noelshack.com/fichiers/2019/26/5/1561683941-image.png');              
        $manager->persist($project1);

        $place = new Place();
        $place      ->setAdress('Boulevard Brûlant')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project1);
        $manager->persist($place);

        $place1 = new Place();
        $place1     ->setAdress('Avenue du Soleil')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project1);
        $manager->persist($place1);

        $place2 = new Place();
        $place2     ->setAdress('Quartier Fondu')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project1);
        $manager->persist($place2);

        $event = new Event();
        $event      ->setName("Réunion Publique d'information")
                    ->setDescription("Proposition des maquettes")
                    ->setDateEvent('2019/06/26')
                    ->setProject($project1);
        $manager->persist($event);

        $event = new Event();
        $event      ->setName("Vote")
                    ->setDescription("")
                    ->setDateEvent('2019/07/01')
                    ->setProject($project1);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Lieu 1 : Boulevard Brûlant")
                    ->setProject($project1);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Lieu 2 : Avenue du Soleil")
                    ->setProject($project1);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Lieu 3 : Quartier Fondu")
                    ->setProject($project1);
        $manager->persist($news);

// Project3
        $project2 = new Project();
        $project2   ->setTitle('Rénovation Mairie')
                    ->setDescription("peinture chez Casto, la main d'oeuvre citoyenne ...")
                    ->setDateStart('2019/06/27')
                    ->setDateEnd('2019/06/31')
                    ->setBudget(500)
                    ->setImgProject('https://image.noelshack.com/fichiers/2019/26/5/1561683945-image-2.png');
        $manager->persist($project2);

        $place = new Place();
        $place      ->setAdress('Place de la Mairie')
                    ->setZipCode(40000)
                    ->setCity('EFFESCEAU')
                    ->setProject($project2);
        $manager->persist($place);

        $event = new Event();
        $event      ->setName("Réunion Publique d'information")
                    ->setDescription("Proposition des couleurs")
                    ->setDateEvent('2019/06/26')
                    ->setProject($project2);
        $manager->persist($event);

        $event = new Event();
        $event      ->setName("Vote")
                    ->setDescription("")
                    ->setDateEvent('2019/06/26')
                    ->setProject($project2);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Couleurs 1 : Bleu / Blanc / Rouge")
                    ->setProject($project2);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Couleurs 2 : Blanc / Noir / Gris")
                    ->setProject($project2);
        $manager->persist($news);

        $vote = new Vote();
        $vote       ->setName("Couleurs 3 : Vert / Orange / Rouge ")
                    ->setProject($project2);
        $manager->persist($news);

// News de la Mairie
        $news = new News();
        $news       ->setTitle("Feu d'Artifice du 14 juillet")
                    ->setDescription("Pour la fête nationale, profitez d'un feu d'artifice extraordinaire en famille ! Catherine se propose bénévolement de le 'tirer' ou pas (sans arrière pensée)")
                    ->setDateNews('2019/07/14');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Concert FSO")
                    ->setDescription("Venez nombreux pour profiter d'une soirée exceptionnelle avec le groupe Fullstack FSO. LeadDev Maël le Traître, maître dans l'art du AirNerf et PO Alban le Terrible ! Musique jusqu'au bout de la nuit")
                    ->setDateNews('2019/06/28');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Voeux de Mr le maire")
                    ->setDescription("Bonnes Vacances")
                    ->setDateNews('2019/07/26');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Avancée de la rénovation de la mairie")
                    ->setDescription("Apportez votre chaise et votre verre, buvons à l'amitié citoyenne entre effessiens, contemplons ensemble la Mairie avec ses nouvelles couleurs")
                    ->setDateNews('2019-07-06');
        $manager->persist($news);
        
        $manager->flush();
    }
}
