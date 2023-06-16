<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/back/article' => [[['_route' => 'app_back_article_index', '_controller' => 'App\\Controller\\ArticleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/article/new' => [[['_route' => 'app_back_article_new', '_controller' => 'App\\Controller\\ArticleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/league' => [[['_route' => 'app_back_league_index', '_controller' => 'App\\Controller\\Admin\\LeagueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/league/new' => [[['_route' => 'app_back_league_new', '_controller' => 'App\\Controller\\Admin\\LeagueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\Admin\\MainController::index'], null, null, null, false, false, null]],
        '/back/player' => [[['_route' => 'app_back_player_index', '_controller' => 'App\\Controller\\Admin\\PlayerController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/player/new' => [[['_route' => 'app_back_player_new', '_controller' => 'App\\Controller\\Admin\\PlayerController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/team' => [[['_route' => 'app_back_team_index', '_controller' => 'App\\Controller\\Admin\\TeamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/team/new' => [[['_route' => 'app_back_team_new', '_controller' => 'App\\Controller\\Admin\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/user' => [[['_route' => 'app_back_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/user/new' => [[['_route' => 'app_back_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/api/articles' => [[['_route' => 'app_api_article_listarticles', '_controller' => 'App\\Controller\\Api\\ArticleController::listArticles'], null, ['GET' => 0], null, false, false, null]],
        '/api/players' => [[['_route' => 'app_api_player_listplayers', '_controller' => 'App\\Controller\\Api\\PlayerController::listPlayers'], null, ['GET' => 0], null, false, false, null]],
        '/api/players/search' => [[['_route' => 'app_api_player_searchplayers', '_controller' => 'App\\Controller\\Api\\PlayerController::searchPlayers'], null, ['GET' => 0], null, false, false, null]],
        '/api/teams' => [[['_route' => 'app_api_team_listteams', '_controller' => 'App\\Controller\\Api\\TeamController::listTeams'], null, ['GET' => 0], null, false, false, null]],
        '/api/users' => [[['_route' => 'app_api_user_listuser', '_controller' => 'App\\Controller\\Api\\UserController::listUser'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/back/(?'
                    .'|article/([^/]++)(?'
                        .'|(*:35)'
                        .'|/edit(*:47)'
                        .'|(*:54)'
                    .')'
                    .'|league/([^/]++)(?'
                        .'|(*:80)'
                        .'|/edit(*:92)'
                        .'|(*:99)'
                    .')'
                    .'|player/([^/]++)(?'
                        .'|(*:125)'
                        .'|/edit(*:138)'
                        .'|(*:146)'
                    .')'
                    .'|team/([^/]++)(?'
                        .'|(*:171)'
                        .'|/edit(*:184)'
                        .'|(*:192)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:217)'
                        .'|/edit(*:230)'
                        .'|(*:238)'
                    .')'
                .')'
                .'|/api/(?'
                    .'|article/([^/]++)(*:272)'
                    .'|player/([^/]++)(*:295)'
                    .'|team/([^/]++)(*:316)'
                    .'|user/([^/]++)(*:337)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:377)'
                    .'|wdt/([^/]++)(*:397)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:443)'
                            .'|router(*:457)'
                            .'|exception(?'
                                .'|(*:477)'
                                .'|\\.css(*:490)'
                            .')'
                        .')'
                        .'|(*:500)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_back_article_show', '_controller' => 'App\\Controller\\ArticleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_back_article_edit', '_controller' => 'App\\Controller\\ArticleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_back_article_delete', '_controller' => 'App\\Controller\\ArticleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        80 => [[['_route' => 'app_back_league_show', '_controller' => 'App\\Controller\\Admin\\LeagueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        92 => [[['_route' => 'app_back_league_edit', '_controller' => 'App\\Controller\\Admin\\LeagueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        99 => [[['_route' => 'app_back_league_delete', '_controller' => 'App\\Controller\\Admin\\LeagueController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_back_player_show', '_controller' => 'App\\Controller\\Admin\\PlayerController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        138 => [[['_route' => 'app_back_player_edit', '_controller' => 'App\\Controller\\Admin\\PlayerController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        146 => [[['_route' => 'app_back_player_delete', '_controller' => 'App\\Controller\\Admin\\PlayerController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        171 => [[['_route' => 'app_back_team_show', '_controller' => 'App\\Controller\\Admin\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        184 => [[['_route' => 'app_back_team_edit', '_controller' => 'App\\Controller\\Admin\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        192 => [[['_route' => 'app_back_team_delete', '_controller' => 'App\\Controller\\Admin\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        217 => [[['_route' => 'app_back_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        230 => [[['_route' => 'app_back_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        238 => [[['_route' => 'app_back_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        272 => [[['_route' => 'app_api_article_finduser', '_controller' => 'App\\Controller\\Api\\ArticleController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        295 => [[['_route' => 'app_api_player_findplayer', '_controller' => 'App\\Controller\\Api\\PlayerController::findPlayer'], ['id'], ['GET' => 0], null, false, true, null]],
        316 => [[['_route' => 'app_api_team_findteam', '_controller' => 'App\\Controller\\Api\\TeamController::findTeam'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'app_api_user_finduser', '_controller' => 'App\\Controller\\Api\\UserController::findUser'], ['id'], ['GET' => 0], null, false, true, null]],
        377 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        397 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        443 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        457 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        477 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        490 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        500 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
