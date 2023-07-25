<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/itinerary' => [[['_route' => 'apicreate_itinerary', '_format' => 'json', '_controller' => 'App\\Controller\\ApiReset\\ItineraryController::createItinerary'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/register' => [[['_route' => 'app_auth_contreollerregister', '_controller' => 'App\\Controller\\Auth\\AuthController::register'], null, ['POST' => 0], null, false, false, null]],
        '/api/reset-password' => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\Auth\\ResetPasswordController::__construct'], null, ['POST' => 0], null, false, false, null]],
        '/api/auth/login' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|itineraries(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:195)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:221)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:259)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:303)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:329)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:367)'
                            .')'
                        .')'
                        .'|bars/([^/]++)(*:390)'
                        .'|events/([^/]++)(*:413)'
                        .'|hotels/([^/]++)(*:436)'
                        .'|restaurant/([^/]++)(*:463)'
                        .'|transportation/([^/]++)(*:494)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:532)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        195 => [[['_route' => '_api_/itineraries/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        221 => [
            [['_route' => '_api_/itineraries{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        259 => [
            [['_route' => '_api_/itineraries/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        303 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        329 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        367 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        390 => [[['_route' => 'app_bars', '_controller' => 'App\\Controller\\ApiReset\\BarsController::searchBars'], ['location'], null, null, false, true, null]],
        413 => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\ApiReset\\EventsController::searchEvents'], ['location'], null, null, false, true, null]],
        436 => [[['_route' => 'app_hotel', '_controller' => 'App\\Controller\\ApiReset\\HotelController::sarchHotels'], ['location'], null, null, false, true, null]],
        463 => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\ApiReset\\RestaurantController::seatchRestaurant'], ['location'], null, null, false, true, null]],
        494 => [[['_route' => 'app_transport', '_controller' => 'App\\Controller\\ApiReset\\TransportController::searchTransport'], ['location'], null, null, false, true, null]],
        532 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
