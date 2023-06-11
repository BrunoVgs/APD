<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_back_default' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/admin']], [], [], []],
    'admin_players' => [[], ['_controller' => 'App\\Controller\\PlayerController::add'], [], [['text', '/admin/players']], [], [], []],
    'admin_player_edit' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/player']], [], [], []],
    'admin_players_delete' => [['id'], ['_controller' => 'App\\Controller\\PlayerController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/player']], [], [], []],
    'app_back_equipes' => [[], ['_controller' => 'App\\Controller\\TeamController::index'], [], [['text', '/admin/equipes']], [], [], []],
    'new' => [[], ['_controller' => 'App\\Controller\\TeamController::new'], [], [['text', '/admin/new/equipe']], [], [], []],
    'show' => [['id'], ['_controller' => 'App\\Controller\\TeamController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipe']], [], [], []],
    'edit' => [['id'], ['_controller' => 'App\\Controller\\TeamController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipe']], [], [], []],
    'delete' => [['id'], ['_controller' => 'App\\Controller\\TeamController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/equipe']], [], [], []],
    'show users' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/admin/users']], [], [], []],
    'add users' => [[], ['_controller' => 'App\\Controller\\UserController::addUsers'], [], [['text', '/admin/users']], [], [], []],
    'app_user_updateusers' => [[], ['_controller' => 'App\\Controller\\UserController::updateUsers'], ['id' => '\\d+'], [['text', '/admin/users/{id]']], [], [], []],
    'app_user_deleteusers' => [[], ['_controller' => 'App\\Controller\\UserController::deleteUsers'], ['id' => '\\d+'], [['text', '/admin/users/{id]']], [], [], []],
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
