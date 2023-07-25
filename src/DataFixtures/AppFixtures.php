<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{

     private  $passwordEncoder;
    public function __construct(UserPasswordHasherInterface $passwordEncoder)

    {
        $this->passwordEncoder= $passwordEncoder;
    }

    public function load(ObjectManager $manager): void
    {
        $user= new User();
        $user->setEmail("test@gmail.com");
        $user->setFirstname("test1");
        $encodedPassword = $this->passwordEncoder->hashPassword($user,"test");

        $user->setPassword($encodedPassword);

         $manager->persist($user);

        $manager->flush();
    }
}
