<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker;

class UserFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

     public const ADMIN_USER_REFERENCE = 'admin-user';

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

   public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 20; $i++) {
            $user = new User();
            $user->setFirstname($faker->firstname);
            $user->setLastname($faker->lastname);
            $user->setEmail($faker->email);
            $user->setTel($faker->phoneNumber);


            // $user->setLastname("Simpson");
            // $user->setEmail("user.admin$i@gmail.fr");

            
            $password = $this->hasher->hashPassword($user, 'pass_1234');
            $user->setPassword($password);

            // $user->setTel("0777777777");

            $manager->persist($user);
        }

        $manager->flush();
        $this->addReference(self::ADMIN_USER_REFERENCE, $user);
    }
}
