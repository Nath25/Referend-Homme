<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\User;
use App\Entity\Event;
use App\Entity\Place;
use App\Entity\News;
use App\Entity\Vote;
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
                    ->setDescription("Nous savons qu'il est important d'éduquer nos enfants ailleurs que devant des écrans, c'est pourquoi la Mairie souhaite construire un nouveau Parc pour enfants avec des jeux pour tous les âges : balançoire, toboggan, tourniquet et autres portiques feront de vos enfants de futurs explorateurs, aventuriers et escaladeurs !! Nous avons plusieurs espaces susceptibles d'accueillir cette infrastructure d'environ 50 mètres par 200. Nous avons besoin de vous pour choisir le lieu idéal ! à vos marques, prêts, votez !!")
                    ->setDateStart("27/06/2019")
                    ->setDateEnd("31/12/2019")
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
                    ->setDescription("Proposition des maquettes, du budget prévisionnel, du planning des travaux, ...")
                    ->setDateEvent('28/06/2019 16h00')
                    ->setProject($project);
        $manager->persist($event);

        $event = new Event();
        $event      ->setName("Débat des Vieux Garçons")
                    ->setDescription("Venez participer au débat du projet 'Parc pour enfants' animé par Maël Vincent.")
                    ->setDateEvent('28/06/2019 18h00')
                    ->setProject($project);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Lieu 1 : Place du Centre")
                    ->setProjet($project);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Lieu 2 : Square Greg")
                    ->setProjet($project);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Lieu 3 : Marché Aribo")
                    ->setProjet($project);
        $manager->persist($vote);

// Project2
        $project1 = new Project();
        $project1   ->setTitle('Piscine Olym-qui-pique')
                    ->setDescription("Futurs champions, votre Mairie a hâte de commencer les travaux de la future Piscine Olym-qui-pique. Comme vous le savez déjà, le Département, la Région et la Mairie d'Effesceau souhaitent proposer leur candidature aux futurs Jeux Olympiques d'été. Votre participation est indispensable : la Mairie a besoin de votre avis pour poser la première pierre !")
                    ->setDateStart('27/04/2019')
                    ->setDateEnd('15/07/2019')
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
                    ->setDescription("Venez nombreux pour participer à la réunion d'information ! Ici ou ailleurs, la piscine verra -t-elle le jour à côté de chez moi ?
                        Découverte de la maquette et questions diverses. Quels peuvent être les implications au niveau du traffic inter-urbain ? Quid des nuisances sonores ? Avez-vous une allergie au chlore ? Quel budget ? ")
                    ->setDateEvent('26/06/2019')
                    ->setProject($project1);
        $manager->persist($event);

        $event = new Event();
        $event      ->setName("Présentation du budget prévisionnel")
                    ->setDescription("Point sur les financemenents publics, les sponsors et le mécénat")
                    ->setDateEvent('01/07/2019')
                    ->setProject($project1);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Lieu 1 : Boulevard Brûlant")
                    ->setProjet($project1);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Lieu 2 : Avenue du Soleil")
                    ->setProjet($project1);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Lieu 3 : Quartier Fondu")
                    ->setProjet($project1);
        $manager->persist($vote);

// Project3
        $project2 = new Project();
        $project2   ->setTitle('Ravalement de Façade')
                    ->setDescription("La peinture chez Casto et la main d'oeuvre citoyenne... La Mairie d'Effesceau a besoin de vous pour son ravalement de façade décennal. Il s'agit de repeindre intégralement la Mairie et nous comptons sur vous ! A vos pinceaux !")
                    ->setDateStart('27/06/2019')
                    ->setDateEnd('31/06/2019')
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
                    ->setDescription("Proposition des différents types de peinture, de textures et de palettes de couleurs")
                    ->setDateEvent('26/06/2019')
                    ->setProject($project2);
        $manager->persist($event);

        $vote = new Vote();
        $vote       ->setName("Couleurs 1 : Bleu / Blanc / Rouge")
                    ->setProjet($project2);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Couleurs 2 : Blanc / Noir / Gris")
                    ->setProjet($project2);
        $manager->persist($vote);

        $vote = new Vote();
        $vote       ->setName("Couleurs 3 : Vert / Orange / Rouge ")
                    ->setProjet($project2);
        $manager->persist($vote);

// News de la Mairie
        $news = new News();
        $news       ->setTitle("Feu d'Artifice du 14 juillet")
                    ->setDescription("Pour la fête nationale, profitez d'un feu d'artifice extraordinaire en famille ! Catherine se propose bénévolement de le 'tirer' ou pas (sans arrière pensée)")
                    ->setDateNews('14/07/2019 23h00');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Concert FSO")
                    ->setDescription("Venez nombreux pour profiter d'une soirée exceptionnelle avec le groupe Fullstack FSO. LeadDev Maël-le-Traître, maître dans l'art du AirNerf et PO Alban-le-Terrible ! Musique jusqu'au bout de la nuit !")
                    ->setDateNews('28/06/2019 20h00');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Voeux de Mr le maire")
                    ->setDescription("Ce sera l'occasion pour Monsieur le Maire de vous souhaiter de Bonnes Vacances. Venez avec joie et bonne humeur.")
                    ->setDateNews('26/07/2019');
        $manager->persist($news);

        $news = new News();
        $news       ->setTitle("Avancée de la rénovation de la mairie")
                    ->setDescription("Apportez votre chaise et votre verre, buvons à l'amitié citoyenne entre effessiens et contemplons ensemble la Mairie avec ses nouvelles couleurs")
                    ->setDateNews('06/07/2019');
        $manager->persist($news);
        
        $manager->flush();
    }
}
