<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/league' => [[['_route' => 'show league', '_controller' => 'App\\Controller\\LeagueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/players' => [[['_route' => 'admin_players', '_controller' => 'App\\Controller\\PlayerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin/equipes' => [[['_route' => 'app_back_equipes', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new/equipe' => [[['_route' => 'new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [
            [['_route' => 'show users', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add users', '_controller' => 'App\\Controller\\UserController::addUsers'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/users/{id]' => [
            [['_route' => 'app_user_updateusers', '_controller' => 'App\\Controller\\UserController::updateUsers'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'app_user_deleteusers', '_controller' => 'App\\Controller\\UserController::deleteUsers'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|player/([^/]++)(?'
                        .'|(*:35)'
                    .')'
                    .'|equipe/([^/]++)(?'
                        .'|(*:61)'
                        .'|/edit(*:73)'
                        .'|(*:80)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:120)'
                    .'|wdt/([^/]++)(*:140)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:186)'
                            .'|router(*:200)'
                            .'|exception(?'
                                .'|(*:220)'
                                .'|\\.css(*:233)'
                            .')'
                        .')'
                        .'|(*:243)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => 'admin_player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'admin_players_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        61 => [[['_route' => 'show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        73 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        80 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        120 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        140 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        200 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        220 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        233 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        243 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
