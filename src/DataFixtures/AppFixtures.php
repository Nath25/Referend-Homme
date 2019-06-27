<?php

namespace App\DataFixtures;

use App\Entity\Project;
use App\Entity\User;
use App\Entity\Event;
use App\Entity\Place;
use App\Entity\News;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
