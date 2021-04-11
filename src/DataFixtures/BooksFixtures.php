<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Books;
use App\Entity\Author;

class BooksFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
			$books = new Books();
			$books->setTitle(sprintf('Book'. $i));
			$books->setInfo(sprintf('information'. $i));
			$books->setImage(sprintf('image'. $i));
			$manager->persist($books);
		}
		

        $manager->flush();
    }
}
