<?php

namespace App\Controller\ApiReset;

use App\Entity\Itinerary;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api',name: 'api')]
class ItineraryController extends AbstractController
{
    #[Route('/itinerary', name: 'create_itinerary',methods: ['POST'], format: 'json')]
    public function createItinerary(Request $request, SerializerInterface $serializer, EntityManagerInterface $entityManager, UrlGeneratorInterface $urlGenerator, UserRepository $userRepository): JsonResponse
    {
        $itineraire= $serializer->deserialize($request->getContent(), Itinerary::class, 'json');
       $content = $request->toArray();

       $idUser = $content['idUser'] ?? -1;
       $itineraire->setUsser($userRepository->find($idUser));

        $entityManager->persist($itineraire);
        $entityManager->flush();

        $json= $serializer->serialize($itineraire,'json', ['groups' => 'getItinerary']);
       // $location = $urlGenerator->generate('detailItinerary', ['id' => $itineraire->getId()], UrlGeneratorInterface::ABSOLUTE_URL);


        return new JsonResponse($json , Response::HTTP_CREATED);
    }
}
