<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Faker;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{
    
   public function load(ObjectManager $manager): void
    {

        $faker = Faker\Factory::create('fr_FR');


        for ($i = 0; $i < 20; $i++) {
           $article = new article();
           $article->setTitre($faker->realText($maxNbChars = 200));
           $article->setResume($faker->realText($maxNbChars = 200));
           $article->setContenu($faker->realText($maxNbChars = 200));
           $article->setImage("homer.jpg");
           $article->setCreatedAt(new \DateTimeImmutable());
           
           $article->setAuteur($this->getReference(UserFixtures::ADMIN_USER_REFERENCE));
           
           $manager->persist($article);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            UserFixtures::class,
        ];
    }
}
