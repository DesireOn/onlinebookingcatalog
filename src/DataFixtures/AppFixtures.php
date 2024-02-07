<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Book;
use App\Factory\AuthorFactory;
use App\Factory\BookFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        AuthorFactory::createMany(25);
        BookFactory::createMany(50);
        $manager->flush();
    }
}
