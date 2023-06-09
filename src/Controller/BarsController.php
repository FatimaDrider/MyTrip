<?php

namespace App\Controller;

use App\Services\YelpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BarsController extends AbstractController
{
    #[Route('/api/bars/{location}', name: 'app_bars')]
    public function index(string $location, YelpService $yelpService, Request $request): JsonResponse
    {
        $term = 'bars';
        $limit = 5;
        $startDate = $request->query->get('start_date');
        $endDate = $request->query->get('end_date');

        $bars = $yelpService->search($term, $location, $limit, $startDate, $endDate);


        return new JsonResponse($bars);
    }
}
