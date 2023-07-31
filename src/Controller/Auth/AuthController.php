<?php

namespace App\Controller\Auth;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/api', name: 'app_auth_contreoller')]

class AuthController extends AbstractController
{



    #[Route('/auth/register', name: 'register', methods:'POST')]
    public function register(ManagerRegistry $doctrine,Request $request,UserPasswordHasherInterface $passwordHasher,EntityManagerInterface $entityManager): JsonResponse
    {
        $em =$doctrine->getManager();
        $decoded = json_decode($request->getContent());
        $email = $decoded->email;
        $plaintextPassword = $decoded->password;

        $user = new User();
        $hashedPassword = $passwordHasher->hashPassword(
            $user,
            $plaintextPassword
        );
        $user->setPassword($hashedPassword);
        $user->setEmail($email);

        $em->persist($user);
        $em->flush();

        return new JsonResponse ([
            "message"=>"new user created"
        ], Response::HTTP_CREATED);

    }
}
