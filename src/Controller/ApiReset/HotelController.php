<?php

namespace App\Controller\ApiReset;

use App\Services\YelpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HotelController extends AbstractController
{
    #[Route('/api/hotels/{location}', name: 'app_hotel')]
    public function index(string $location, YelpService $yelpService,Request $request): JsonResponse
    {
        $term = 'hotels';
        $limit= 5;
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');
        $hotels = $yelpService->search($term,$location, $limit, $startDate,$endDate);

        return new JsonResponse($hotels);
    }
}
