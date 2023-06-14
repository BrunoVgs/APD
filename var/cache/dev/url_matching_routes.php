<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/articles' => [[['_route' => 'app_api_article_listarticles', '_controller' => 'App\\Controller\\Api\\ArticleController::listArticles'], null, ['GET' => 0], null, false, false, null]],
        '/api/players' => [[['_route' => 'app_api_player_listplayers', '_controller' => 'App\\Controller\\Api\\PlayerController::listPlayers'], null, ['GET' => 0], null, false, false, null]],
        '/api/players/search' => [[['_route' => 'app_api_player_searchplayers', '_controller' => 'App\\Controller\\Api\\PlayerController::searchPlayers'], null, ['GET' => 0], null, false, false, null]],
        '/api/teams' => [[['_route' => 'app_api_team_listteams', '_controller' => 'App\\Controller\\Api\\TeamController::listTeams'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'app_api_user_listuser', '_controller' => 'App\\Controller\\Api\\UserController::listUser'], null, ['GET' => 0], null, false, false, null]],
        '/admin/league' => [
            [['_route' => 'show league', '_controller' => 'App\\Controller\\LeagueController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add league', '_controller' => 'App\\Controller\\LeagueController::addLeague'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/league/{id]' => [
            [['_route' => 'update league', '_controller' => 'App\\Controller\\LeagueController::updateLeague'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'delete league', '_controller' => 'App\\Controller\\LeagueController::deleteLeague'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/players' => [[['_route' => 'admin_players', '_controller' => 'App\\Controller\\PlayerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin/equipes' => [[['_route' => 'app_back_equipes', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/users' => [[['_route' => 'show users', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new/utilisateur' => [[['_route' => 'new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi/(?'
                        .'|article/([^/]++)(*:34)'
                        .'|player/([^/]++)(*:56)'
                        .'|team/([^/]++)(*:76)'
                        .'|user/([^/]++)(*:96)'
                    .')'
                    .'|dmin/(?'
                        .'|player/([^/]++)(?'
                            .'|(*:130)'
                        .')'
                        .'|utilisateur/([^/]++)(?'
                            .'|(*:162)'
                            .'|/edit(*:175)'
                            .'|(*:183)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:225)'
                    .'|wdt/([^/]++)(*:245)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:291)'
                            .'|router(*:305)'
                            .'|exception(?'
                                .'|(*:325)'
                                .'|\\.css(*:338)'
                            .')'
                        .')'
                        .'|(*:348)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_api_article_finduser', '_controller' => 'App\\Controller\\Api\\ArticleController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        56 => [[['_route' => 'app_api_player_findplayer', '_controller' => 'App\\Controller\\Api\\PlayerController::findPlayer'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_api_team_findteam', '_controller' => 'App\\Controller\\Api\\TeamController::findTeam'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_api_user_finduser', '_controller' => 'App\\Controller\\Api\\UserController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        130 => [
            [['_route' => 'admin_player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'admin_players_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        162 => [[['_route' => 'show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        175 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        183 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        225 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        245 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        291 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        305 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        325 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        338 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        348 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
