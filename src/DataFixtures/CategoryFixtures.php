<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Category;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cat1 = new Category();
        $cat1->setName('small items');

        $cat2 = new Category();
        $cat2->setName('large items');

        $manager->persist($cat1);
        $manager->persist($cat2);

        $manager->flush();
    }
}
