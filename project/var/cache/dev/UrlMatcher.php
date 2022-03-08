<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/backend' => [[['_route' => 'backend', '_controller' => 'App\\Controller\\BackendController::index'], null, null, null, false, false, null]],
        '/hotel' => [[['_route' => 'hotel', '_controller' => 'App\\Controller\\HotelController::index'], null, null, null, false, false, null]],
        '/ajouterhotel' => [[['_route' => 'ajouterhotel', '_controller' => 'App\\Controller\\HotelController::ajouter'], null, null, null, false, false, null]],
        '/afficherhotel' => [[['_route' => 'afficherhotel', '_controller' => 'App\\Controller\\HotelController::afficher'], null, null, null, false, false, null]],
        '/testbar' => [[['_route' => 'testbar', '_controller' => 'App\\Controller\\HotelController::testbar'], null, null, null, false, false, null]],
        '/listp' => [[['_route' => 'listp', '_controller' => 'App\\Controller\\HotelController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/hotel' => [[['_route' => 'reservation_hotel', '_controller' => 'App\\Controller\\ReservationHotelController::index'], null, null, null, false, false, null]],
        '/createreservationhotel' => [[['_route' => 'createreservationhotel', '_controller' => 'App\\Controller\\ReservationHotelController::create'], null, null, null, false, false, null]],
        '/viewreshotel' => [[['_route' => 'viewreshotel', '_controller' => 'App\\Controller\\ReservationHotelController::view'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/modifierhotel/([^/]++)(*:192)'
                .'|/supprimerhotel/([^/]++)(*:224)'
                .'|/frontcreatereservationhotel/([^/]++)(*:269)'
                .'|/updatereservationhotel/([^/]++)(*:309)'
                .'|/deletereshotel/([^/]++)(*:341)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        192 => [[['_route' => 'modifierhotel', '_controller' => 'App\\Controller\\HotelController::modifier'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'supprimerhotel', '_controller' => 'App\\Controller\\HotelController::supprimer'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'frontcreatereservationhotel', '_controller' => 'App\\Controller\\ReservationHotelController::front_create'], ['id'], null, null, false, true, null]],
        309 => [[['_route' => 'updatereservationhotel', '_controller' => 'App\\Controller\\ReservationHotelController::update'], ['id'], null, null, false, true, null]],
        341 => [
            [['_route' => 'deletereshotel', '_controller' => 'App\\Controller\\ReservationHotelController::delete'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
