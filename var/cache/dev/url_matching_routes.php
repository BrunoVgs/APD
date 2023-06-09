<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/joueurs' => [[['_route' => 'admin_joueurs', '_controller' => 'App\\Controller\\JoueursController::add'], null, ['POST' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_back_default', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/admin/equipes' => [[['_route' => 'app_back_equipes', '_controller' => 'App\\Controller\\TeamController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new/equipe' => [[['_route' => 'new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|joueurs/([^/]++)(?'
                        .'|(*:36)'
                    .')'
                    .'|equipe/([^/]++)(?'
                        .'|(*:62)'
                        .'|/edit(*:74)'
                        .'|(*:81)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:121)'
                    .'|wdt/([^/]++)(*:141)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:187)'
                            .'|router(*:201)'
                            .'|exception(?'
                                .'|(*:221)'
                                .'|\\.css(*:234)'
                            .')'
                        .')'
                        .'|(*:244)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        36 => [
            [['_route' => 'admin_joueur_edit', '_controller' => 'App\\Controller\\JoueursController::edit'], ['id'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'admin_joueurs_delete', '_controller' => 'App\\Controller\\JoueursController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        62 => [[['_route' => 'show', '_controller' => 'App\\Controller\\TeamController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        121 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        141 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        187 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        201 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        221 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        234 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        244 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
