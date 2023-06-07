<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;


class UserFixture extends Fixture
{

    private $passwordEncoder;
    public function __construct(UserPasswordHasherInterface $passwordEncoder)
    {

        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
         $user = new User();
         $user->setEmail("Fatima@gmail.com");
        $hashedPassword = $this->passwordEncoder->hashPassword($user, '12345');
        $user->setPassword($hashedPassword);
         $manager->persist($user);

        $manager->flush();
    }
}
