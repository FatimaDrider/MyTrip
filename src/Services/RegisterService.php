<?php
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;




class RegisterService {
    private  $entityManager;
    private  $passwordEncoder;

    public function __construct(EntityManagerInterface $entityManager,UserPasswordEncoderInterface $userPasswordEncoder)
    {

        $this->entityManager= $entityManager;
        $this->passwordEncoder= $this->passwordEncoder;
    }




}
