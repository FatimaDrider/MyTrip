<?php

namespace App\Controller\ApiReset;

use App\Services\YelpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RestaurantController extends AbstractController
{
    #[Route('/api/restaurant/{location}', name: 'app_restaurant')]
    public function index(string $location, YelpService $yelpService, Request $request): JsonResponse
    {
        $term= 'restaurant';
        $limit = 5;
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');

        $restaurant = $yelpService->search($term,$location, $limit,$startDate, $endDate );

        return new JsonResponse($restaurant);
    }
}
