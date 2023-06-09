<?php

namespace App\Controller\ApiReset;

use App\Services\YelpService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EventsController extends AbstractController
{
    #[Route('/api/events/{location}', name: 'app_events')]
    public function index(string $location, YelpService $yelpService, Request $request): JsonResponse
    {
        $term = 'events';
        $limit = 5;
        $startDate = $request->query->get('start_date');
        $endDate= $request->query->get('end_date');

        $events = $yelpService->search($term,$location, $limit, $startDate, $endDate);

        return new JsonResponse($events);
    }
}
