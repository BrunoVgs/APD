<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_back_article_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::index'], [], [['text', '/back/article/']], [], [], []],
    'app_back_article_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ArticleController::new'], [], [['text', '/back/article/new']], [], [], []],
    'app_back_article_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/article']], [], [], []],
    'app_back_article_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/article']], [], [], []],
    'app_back_article_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ArticleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/article']], [], [], []],
    'app_back_league_index' => [[], ['_controller' => 'App\\Controller\\Admin\\LeagueController::index'], [], [['text', '/back/league/']], [], [], []],
    'app_back_league_new' => [[], ['_controller' => 'App\\Controller\\Admin\\LeagueController::new'], [], [['text', '/back/league/new']], [], [], []],
    'app_back_league_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LeagueController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/league']], [], [], []],
    'app_back_league_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LeagueController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/league']], [], [], []],
    'app_back_league_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\LeagueController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/league']], [], [], []],
    'app_back_default' => [[], ['_controller' => 'App\\Controller\\Admin\\MainController::index'], [], [['text', '/']], [], [], []],
    'app_back_player_index' => [[], ['_controller' => 'App\\Controller\\Admin\\PlayerController::index'], [], [['text', '/back/player/']], [], [], []],
    'app_back_player_new' => [[], ['_controller' => 'App\\Controller\\Admin\\PlayerController::new'], [], [['text', '/back/player/new']], [], [], []],
    'app_back_player_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlayerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/player']], [], [], []],
    'app_back_player_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlayerController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/player']], [], [], []],
    'app_back_player_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PlayerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/player']], [], [], []],
    'app_back_team_index' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamController::index'], [], [['text', '/back/team/']], [], [], []],
    'app_back_team_new' => [[], ['_controller' => 'App\\Controller\\Admin\\TeamController::new'], [], [['text', '/back/team/new']], [], [], []],
    'app_back_team_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/team']], [], [], []],
    'app_back_team_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/team']], [], [], []],
    'app_back_team_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TeamController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/team']], [], [], []],
    'app_back_user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/back/user/']], [], [], []],
    'app_back_user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::new'], [], [['text', '/back/user/new']], [], [], []],
    'app_back_user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'app_back_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'app_back_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/back/user']], [], [], []],
    'app_api_article_listarticles' => [[], ['_controller' => 'App\\Controller\\Api\\ArticleController::listArticles'], [], [['text', '/api/articles']], [], [], []],
    'app_api_article_finduser' => [['id'], ['_controller' => 'App\\Controller\\Api\\ArticleController::findUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/article']], [], [], []],
    'app_api_player_listplayers' => [[], ['_controller' => 'App\\Controller\\Api\\PlayerController::listPlayers'], [], [['text', '/api/players']], [], [], []],
    'app_api_player_searchplayers' => [[], ['_controller' => 'App\\Controller\\Api\\PlayerController::searchPlayers'], [], [['text', '/api/players/search']], [], [], []],
    'app_api_team_listteams' => [[], ['_controller' => 'App\\Controller\\Api\\TeamController::listTeams'], [], [['text', '/api/teams']], [], [], []],
    'app_api_team_findteam' => [['id'], ['_controller' => 'App\\Controller\\Api\\TeamController::findTeam'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/team']], [], [], []],
    'app_api_user_listuser' => [[], ['_controller' => 'App\\Controller\\Api\\UserController::listUser'], [], [['text', '/api/users']], [], [], []],
    'app_api_user_finduser' => [['id'], ['_controller' => 'App\\Controller\\Api\\UserController::findUser'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/api/user']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\Security\\RegisterController::register'], [], [['text', '/register']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];
