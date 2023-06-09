<?php

namespace App\Controller\Auth;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class ResetPasswordController extends AbstractController
{

    private $userRepository;
    private $passwordHasher;

    #[Route('/api/reset-password', name: 'app_reset_password',methods: 'POST')]
    public function __construct(UserRepository $userRepository, UserPasswordHasherInterface $passwordHasher)
    {
        $this->userRepository= $userRepository;
        $this->passwordHasher= $userRepository;
    }

    public  function reset(Request $request):JsonResponse{
        $data = json_decode($request->getContent(), true);

        // cette fonction permet Vérifier si l'utilisateur existe
        $user = $this->userRepository->findOneBy(['email' => $data['email']]);
        if (!$user) {
            throw new AccessDeniedException('Utilisateur introuvable.');
        }


        // Générer un nouveau mot de passe
        $newPassword = bin2hex(random_bytes(8));
        $encodedPassword = $this->passwordHasher->encodePassword($user, $newPassword);
        $user->setPassword($encodedPassword);

        // Enregistrer les modifications en base de données
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        // Envoyer le nouveau mot de passe à l'utilisateur par e-mail (optionnel)
        return new JsonResponse(['message' => 'Mot de passe réinitialisé avec succès.']);    }


}
