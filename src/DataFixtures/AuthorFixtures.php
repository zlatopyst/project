<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Author;
use App\Entity\Books;

class AuthorFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
		for ($i = 1; $i <= 10; $i++) {
			$author = new Author();
			$author->setFirstName(sprintf('Name'. $i));
			$author->setSecondName(sprintf('Second'. $i));
			$author->setMiddleName(sprintf('Middle'. $i));
			$author->setBirthday(sprintf(2001-05-24));
			$manager->persist($author);
		}
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
