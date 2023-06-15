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
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\Security\\RegisterController::register'], null, ['POST' => 0], null, false, false, null]],
        '/admin/league' => [
            [['_route' => 'show league', '_controller' => 'App\\Controller\\admin\\LeagueController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add league', '_controller' => 'App\\Controller\\admin\\LeagueController::addLeague'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/league/{id]' => [
            [['_route' => 'update league', '_controller' => 'App\\Controller\\admin\\LeagueController::updateLeague'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'delete league', '_controller' => 'App\\Controller\\admin\\LeagueController::deleteLeague'], null, ['DELETE' => 0], null, false, false, null],
        ],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\admin\\MainController::index'], null, null, null, false, false, null]],
        '/admin/players' => [[['_route' => 'admin_players', '_controller' => 'App\\Controller\\admin\\PlayerController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin/equipes' => [[['_route' => 'app_back_equipes', '_controller' => 'App\\Controller\\admin\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new/equipe' => [[['_route' => 'new', '_controller' => 'App\\Controller\\admin\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [
            [['_route' => 'show users', '_controller' => 'App\\Controller\\admin\\UserController::index'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'add users', '_controller' => 'App\\Controller\\admin\\UserController::addUsers'], null, ['POST' => 0], null, false, false, null],
        ],
        '/admin/users/{id]' => [
            [['_route' => 'app_admin_user_updateusers', '_controller' => 'App\\Controller\\admin\\UserController::updateUsers'], null, ['PUT' => 0], null, false, false, null],
            [['_route' => 'app_admin_user_deleteusers', '_controller' => 'App\\Controller\\admin\\UserController::deleteUsers'], null, ['DELETE' => 0], null, false, false, null],
        ],
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
                        .'|team/([^/]++)(*:54)'
                        .'|user/([^/]++)(*:74)'
                    .')'
                    .'|dmin/(?'
                        .'|player/([^/]++)(?'
                            .'|(*:108)'
                        .')'
                        .'|equipe/([^/]++)(?'
                            .'|(*:135)'
                            .'|/edit(*:148)'
                            .'|(*:156)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:198)'
                    .'|wdt/([^/]++)(*:218)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:264)'
                            .'|router(*:278)'
                            .'|exception(?'
                                .'|(*:298)'
                                .'|\\.css(*:311)'
                            .')'
                        .')'
                        .'|(*:321)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_api_article_finduser', '_controller' => 'App\\Controller\\Api\\ArticleController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        54 => [[['_route' => 'app_api_team_findteam', '_controller' => 'App\\Controller\\Api\\TeamController::findTeam'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_api_user_finduser', '_controller' => 'App\\Controller\\Api\\UserController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        108 => [
            [['_route' => 'admin_player_edit', '_controller' => 'App\\Controller\\admin\\PlayerController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'admin_players_delete', '_controller' => 'App\\Controller\\admin\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        135 => [[['_route' => 'show', '_controller' => 'App\\Controller\\admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        148 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        156 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        198 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        218 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        264 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        278 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        298 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        311 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        321 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
