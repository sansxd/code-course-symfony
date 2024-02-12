<?php

namespace App\DataFixtures;

use App\Entity\Planet;
use App\Factory\PlanetFactory;
use App\Factory\UserFactory;
use App\Factory\VoyageFactory;
use App\Factory\WorkflowFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        PlanetFactory::createMany(5);
        PlanetFactory::createMany(2, function() {
            $names = PlanetFactory::OTHER_PLANET_NAMES;

            return [
                'isInMilkyWay' => false,
                'name' => $names[array_rand($names)]
            ];
        });

        VoyageFactory::createMany(30, function () {
            return [
                'planet' => PlanetFactory::random(),
            ];
        });

        UserFactory::createOne(['email' => 'devmaster@example.com']);
        UserFactory::createMany(10);

        WorkflowFactory::createMany(100);

        $manager->flush();
    }
}
