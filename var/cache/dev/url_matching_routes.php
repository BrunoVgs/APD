<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back/league' => [[['_route' => 'app_back_league_index', '_controller' => 'App\\Controller\\LeagueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/league/new' => [[['_route' => 'app_back_league_new', '_controller' => 'App\\Controller\\LeagueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/back/player' => [[['_route' => 'app_back_player_index', '_controller' => 'App\\Controller\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/player/new' => [[['_route' => 'app_back_player_new', '_controller' => 'App\\Controller\\PlayerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/team' => [[['_route' => 'app_back_team_index', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/team/new' => [[['_route' => 'app_back_team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/user' => [[['_route' => 'app_back_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/user/new' => [[['_route' => 'app_back_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/back/(?'
                    .'|league/([^/]++)(?'
                        .'|(*:34)'
                        .'|/edit(*:46)'
                        .'|(*:53)'
                    .')'
                    .'|player/([^/]++)(?'
                        .'|(*:79)'
                    .')'
                    .'|team/([^/]++)(?'
                        .'|(*:103)'
                        .'|/edit(*:116)'
                        .'|(*:124)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:149)'
                        .'|/edit(*:162)'
                        .'|(*:170)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:211)'
                    .'|wdt/([^/]++)(*:231)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:277)'
                            .'|router(*:291)'
                            .'|exception(?'
                                .'|(*:311)'
                                .'|\\.css(*:324)'
                            .')'
                        .')'
                        .'|(*:334)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_back_league_show', '_controller' => 'App\\Controller\\LeagueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        46 => [[['_route' => 'app_back_league_edit', '_controller' => 'App\\Controller\\LeagueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        53 => [[['_route' => 'app_back_league_delete', '_controller' => 'App\\Controller\\LeagueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        79 => [
            [['_route' => 'app_back_player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [['_route' => 'app_back_player_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'app_back_player_show', '_controller' => 'App\\Controller\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        103 => [[['_route' => 'app_back_team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        116 => [[['_route' => 'app_back_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        124 => [[['_route' => 'app_back_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        149 => [[['_route' => 'app_back_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        162 => [[['_route' => 'app_back_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        170 => [[['_route' => 'app_back_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        211 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        231 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        277 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        291 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        324 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        334 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
