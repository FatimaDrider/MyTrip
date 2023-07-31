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
        '/addCommetaire' => [[['_route' => 'add_commentaireadd_commentaire', '_controller' => 'App\\Controller\\CommentaireController::index'], null, ['GET]' => 0, 'GET' => 1], null, false, false, null]],
        '/new' => [[['_route' => 'add_commentaireapp_commentaire_new', '_controller' => 'App\\Controller\\CommentaireController::new'], null, ['GET]' => 0, 'GET' => 1, 'POST' => 2], null, false, false, null]],
        '/api/auth/login' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|co(?'
                            .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|mmentaires(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:197)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:223)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:261)'
                                .')'
                            .')'
                        .')'
                        .'|itineraries(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:312)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:338)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:376)'
                            .')'
                        .')'
                        .'|profiles(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:423)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:449)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:487)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:531)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:557)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:595)'
                            .')'
                        .')'
                        .'|bars/([^/]++)(*:618)'
                        .'|events/([^/]++)(*:641)'
                        .'|hotels/([^/]++)(*:664)'
                        .'|restaurant/([^/]++)(*:691)'
                        .'|transportation/([^/]++)(*:722)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:760)'
                .'|/([^/]++)(?'
                    .'|(*:780)'
                    .'|/edit(*:793)'
                    .'|(*:801)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        197 => [[['_route' => '_api_/commentaires/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => '_api_/commentaires{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        261 => [
            [['_route' => '_api_/commentaires/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        312 => [[['_route' => '_api_/itineraries/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        338 => [
            [['_route' => '_api_/itineraries{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        376 => [
            [['_route' => '_api_/itineraries/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/itineraries/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Itinerary', '_api_operation_name' => '_api_/itineraries/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        423 => [[['_route' => '_api_/profiles/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        449 => [
            [['_route' => '_api_/profiles{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/profiles{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        487 => [
            [['_route' => '_api_/profiles/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/profiles/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/profiles/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Profile', '_api_operation_name' => '_api_/profiles/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        531 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        557 => [
            [['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        595 => [
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_patch', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_delete', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        618 => [[['_route' => 'app_bars', '_controller' => 'App\\Controller\\ApiReset\\BarsController::searchBars'], ['location'], null, null, false, true, null]],
        641 => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\ApiReset\\EventsController::searchEvents'], ['location'], null, null, false, true, null]],
        664 => [[['_route' => 'app_hotel', '_controller' => 'App\\Controller\\ApiReset\\HotelController::sarchHotels'], ['location'], null, null, false, true, null]],
        691 => [[['_route' => 'app_restaurant', '_controller' => 'App\\Controller\\ApiReset\\RestaurantController::seatchRestaurant'], ['location'], null, null, false, true, null]],
        722 => [[['_route' => 'app_transport', '_controller' => 'App\\Controller\\ApiReset\\TransportController::searchTransport'], ['location'], null, null, false, true, null]],
        760 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        780 => [[['_route' => 'add_commentaireapp_commentaire_show', '_controller' => 'App\\Controller\\CommentaireController::show'], ['id'], ['GET]' => 0, 'GET' => 1], null, false, true, null]],
        793 => [[['_route' => 'add_commentaireapp_commentaire_edit', '_controller' => 'App\\Controller\\CommentaireController::edit'], ['id'], ['GET]' => 0, 'GET' => 1, 'POST' => 2], null, false, false, null]],
        801 => [
            [['_route' => 'add_commentaireapp_commentaire_delete', '_controller' => 'App\\Controller\\CommentaireController::delete'], ['id'], ['GET]' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
