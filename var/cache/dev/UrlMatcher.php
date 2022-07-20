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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/category/new' => [[['_route' => 'admin_category_new', '_controller' => 'App\\Controller\\Admin\\CategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/comment' => [[['_route' => 'admin_comment_index', '_controller' => 'App\\Controller\\Admin\\CommentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/comment/new' => [[['_route' => 'admin_comment_new', '_controller' => 'App\\Controller\\Admin\\CommentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/image' => [[['_route' => 'admin_image_index', '_controller' => 'App\\Controller\\Admin\\ImageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages' => [[['_route' => 'admin_messages_index', '_controller' => 'App\\Controller\\Admin\\MessagesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/messages/new' => [[['_route' => 'admin_messages_new', '_controller' => 'App\\Controller\\Admin\\MessagesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/product' => [[['_route' => 'admin_product_index', '_controller' => 'App\\Controller\\Admin\\ProductController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/product/new' => [[['_route' => 'admin_product_new', '_controller' => 'App\\Controller\\Admin\\ProductController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'admin_setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/setting/new' => [[['_route' => 'admin_setting_new', '_controller' => 'App\\Controller\\Admin\\SettingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_controller' => 'App\\Controller\\Admin\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_controller' => 'App\\Controller\\Admin\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\Home\\HomeController::index'], null, null, null, false, false, null]],
        '/aboutus' => [[['_route' => 'home_about', '_controller' => 'App\\Controller\\Home\\HomeController::aboutus'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'home_contact', '_controller' => 'App\\Controller\\Home\\HomeController::contact'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registeradmin' => [[['_route' => 'admin_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/registeruser' => [[['_route' => 'user_register', '_controller' => 'App\\Controller\\RegistrationController::registeruser'], null, null, null, false, false, null]],
        '/loginadmin' => [[['_route' => 'login_admin', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/loginuser' => [[['_route' => 'login_user', '_controller' => 'App\\Controller\\SecurityController::loginuser'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/comments' => [[['_route' => 'user_comments', '_controller' => 'App\\Controller\\UserController::comments'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/admin/(?'
                    .'|c(?'
                        .'|ategory/([^/]++)(?'
                            .'|(*:202)'
                            .'|/edit(*:215)'
                            .'|(*:223)'
                        .')'
                        .'|omment/([^/]++)(?'
                            .'|(*:250)'
                            .'|/edit(*:263)'
                            .'|(*:271)'
                        .')'
                    .')'
                    .'|image/(?'
                        .'|new/([^/]++)(*:302)'
                        .'|([^/]++)(?'
                            .'|(*:321)'
                            .'|/(?'
                                .'|edit(*:337)'
                                .'|([^/]++)(*:353)'
                            .')'
                        .')'
                    .')'
                    .'|messages/([^/]++)(?'
                        .'|(*:384)'
                        .'|/edit(*:397)'
                        .'|(*:405)'
                    .')'
                    .'|product/([^/]++)(?'
                        .'|(*:433)'
                        .'|/edit(*:446)'
                        .'|(*:454)'
                    .')'
                    .'|s(?'
                        .'|etting/([^/]++)(?'
                            .'|(*:485)'
                            .'|/edit(*:498)'
                            .'|(*:506)'
                        .')'
                        .'|hopping/(?'
                            .'|([^/]++)(*:534)'
                            .'|new(*:545)'
                            .'|show/(\\d+)(*:563)'
                            .'|([^/]++)(?'
                                .'|/edit(*:587)'
                                .'|(*:595)'
                            .')'
                        .')'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:622)'
                        .'|/edit(*:635)'
                        .'|(*:643)'
                    .')'
                .')'
                .'|/product/([^/]++)(*:670)'
                .'|/user/(?'
                    .'|(\\d+)(*:692)'
                    .'|([^/]++)(?'
                        .'|/edit(*:716)'
                        .'|(*:724)'
                    .')'
                    .'|newcomment/([^/]++)(*:752)'
                    .'|shopping(?'
                        .'|(*:771)'
                        .'|/([^/]++)(?'
                            .'|(*:791)'
                            .'|(*:799)'
                        .')'
                    .')'
                .')'
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
        202 => [[['_route' => 'admin_category_show', '_controller' => 'App\\Controller\\Admin\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        215 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        223 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        250 => [[['_route' => 'admin_comment_show', '_controller' => 'App\\Controller\\Admin\\CommentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'admin_comment_edit', '_controller' => 'App\\Controller\\Admin\\CommentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'admin_comment_delete', '_controller' => 'App\\Controller\\Admin\\CommentController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        302 => [[['_route' => 'admin_image_new', '_controller' => 'App\\Controller\\Admin\\ImageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        321 => [[['_route' => 'admin_image_show', '_controller' => 'App\\Controller\\Admin\\ImageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'admin_image_edit', '_controller' => 'App\\Controller\\Admin\\ImageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        353 => [[['_route' => 'admin_image_delete', '_controller' => 'App\\Controller\\Admin\\ImageController::delete'], ['id', 'pid'], ['DELETE' => 0], null, false, true, null]],
        384 => [[['_route' => 'admin_messages_show', '_controller' => 'App\\Controller\\Admin\\MessagesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'admin_messages_edit', '_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        405 => [[['_route' => 'admin_messages_delete', '_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        433 => [[['_route' => 'admin_product_show', '_controller' => 'App\\Controller\\Admin\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        446 => [[['_route' => 'admin_product_edit', '_controller' => 'App\\Controller\\Admin\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        454 => [[['_route' => 'admin_product_delete', '_controller' => 'App\\Controller\\Admin\\ProductController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        485 => [[['_route' => 'admin_setting_show', '_controller' => 'App\\Controller\\Admin\\SettingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'admin_setting_edit', '_controller' => 'App\\Controller\\Admin\\SettingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        506 => [[['_route' => 'admin_setting_delete', '_controller' => 'App\\Controller\\Admin\\SettingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        534 => [[['_route' => 'admin_shopping_index', '_controller' => 'App\\Controller\\Admin\\ShoppingController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'admin_shopping_new', '_controller' => 'App\\Controller\\Admin\\ShoppingController::new'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        563 => [[['_route' => 'admin_shopping_show', '_controller' => 'App\\Controller\\Admin\\ShoppingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        587 => [[['_route' => 'admin_shopping_edit', '_controller' => 'App\\Controller\\Admin\\ShoppingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        595 => [[['_route' => 'admin_shopping_delete', '_controller' => 'App\\Controller\\Admin\\ShoppingController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        622 => [[['_route' => 'admin_user_show', '_controller' => 'App\\Controller\\Admin\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        635 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        643 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        670 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\Home\\HomeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        716 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        724 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        752 => [[['_route' => 'user_new_comment', '_controller' => 'App\\Controller\\UserController::newComment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        771 => [[['_route' => 'user_shopping', '_controller' => 'App\\Controller\\UserController::shoppings'], [], ['GET' => 0], null, false, false, null]],
        791 => [[['_route' => 'user_shopping_show', '_controller' => 'App\\Controller\\UserController::shoppingshow'], ['id'], ['GET' => 0], null, false, true, null]],
        799 => [
            [['_route' => 'user_shopping_new', '_controller' => 'App\\Controller\\UserController::newShopping'], ['pid'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
