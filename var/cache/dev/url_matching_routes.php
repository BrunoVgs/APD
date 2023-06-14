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
        '/back/league' => [[['_route' => 'app_back_league_index', '_controller' => 'App\\Controller\\LeagueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/league/new' => [[['_route' => 'app_back_league_new', '_controller' => 'App\\Controller\\LeagueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/players' => [[['_route' => 'admin_players', '_controller' => 'App\\Controller\\PlayerController::add'], null, ['POST' => 0], null, false, false, null]],
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
                .'|/a(?'
                    .'|pi/(?'
                        .'|article/([^/]++)(*:34)'
                        .'|player/([^/]++)(*:56)'
                        .'|team/([^/]++)(*:76)'
                        .'|user/([^/]++)(*:96)'
                    .')'
                    .'|dmin/player/([^/]++)(?'
                        .'|(*:127)'
                    .')'
                .')'
                .'|/back/(?'
                    .'|league/([^/]++)(?'
                        .'|(*:164)'
                        .'|/edit(*:177)'
                        .'|(*:185)'
                    .')'
                    .'|team/([^/]++)(?'
                        .'|(*:210)'
                        .'|/edit(*:223)'
                        .'|(*:231)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:256)'
                        .'|/edit(*:269)'
                        .'|(*:277)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:318)'
                    .'|wdt/([^/]++)(*:338)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:384)'
                            .'|router(*:398)'
                            .'|exception(?'
                                .'|(*:418)'
                                .'|\\.css(*:431)'
                            .')'
                        .')'
                        .'|(*:441)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'app_api_article_finduser', '_controller' => 'App\\Controller\\Api\\ArticleController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        56 => [[['_route' => 'app_api_player_findplayer', '_controller' => 'App\\Controller\\Api\\PlayerController::findPlayer'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'app_api_team_findteam', '_controller' => 'App\\Controller\\Api\\TeamController::findTeam'], ['id'], ['GET' => 0], null, false, true, null]],
        96 => [[['_route' => 'app_api_user_finduser', '_controller' => 'App\\Controller\\Api\\UserController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        127 => [
            [['_route' => 'admin_player_edit', '_controller' => 'App\\Controller\\PlayerController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'admin_players_delete', '_controller' => 'App\\Controller\\PlayerController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        164 => [[['_route' => 'app_back_league_show', '_controller' => 'App\\Controller\\LeagueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        177 => [[['_route' => 'app_back_league_edit', '_controller' => 'App\\Controller\\LeagueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        185 => [[['_route' => 'app_back_league_delete', '_controller' => 'App\\Controller\\LeagueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        210 => [[['_route' => 'app_back_team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        223 => [[['_route' => 'app_back_team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        231 => [[['_route' => 'app_back_team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_back_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_back_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        277 => [[['_route' => 'app_back_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        318 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        338 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        384 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        398 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        418 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        431 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        441 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
