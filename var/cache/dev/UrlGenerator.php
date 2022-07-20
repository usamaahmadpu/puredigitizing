<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\AdminController::index'], [], [['text', '/admin']], [], []],
    'admin_category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/category/']], [], []],
    'admin_category_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::new'], [], [['text', '/admin/category/new']], [], []],
    'admin_category_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_comment_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentController::index'], [], [['text', '/admin/comment/']], [], []],
    'admin_comment_new' => [[], ['_controller' => 'App\\Controller\\Admin\\CommentController::new'], [], [['text', '/admin/comment/new']], [], []],
    'admin_comment_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_comment_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_comment_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CommentController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/comment']], [], []],
    'admin_image_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ImageController::index'], [], [['text', '/admin/image/']], [], []],
    'admin_image_new' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::new'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/image/new']], [], []],
    'admin_image_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_image_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ImageController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_image_delete' => [['id', 'pid'], ['_controller' => 'App\\Controller\\Admin\\ImageController::delete'], [], [['variable', '/', '[^/]++', 'pid'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/image']], [], []],
    'admin_messages_index' => [[], ['_controller' => 'App\\Controller\\Admin\\MessagesController::index'], [], [['text', '/admin/messages/']], [], []],
    'admin_messages_new' => [[], ['_controller' => 'App\\Controller\\Admin\\MessagesController::new'], [], [['text', '/admin/messages/new']], [], []],
    'admin_messages_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_messages_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_messages_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MessagesController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/messages']], [], []],
    'admin_product_index' => [[], ['_controller' => 'App\\Controller\\Admin\\ProductController::index'], [], [['text', '/admin/product/']], [], []],
    'admin_product_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ProductController::new'], [], [['text', '/admin/product/new']], [], []],
    'admin_product_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'admin_product_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'admin_product_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProductController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/product']], [], []],
    'admin_setting_index' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::index'], [], [['text', '/admin/setting/']], [], []],
    'admin_setting_new' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::new'], [], [['text', '/admin/setting/new']], [], []],
    'admin_setting_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'admin_setting_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'admin_setting_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SettingController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/setting']], [], []],
    'admin_shopping_index' => [['slug'], ['_controller' => 'App\\Controller\\Admin\\ShoppingController::index'], [], [['variable', '/', '[^/]++', 'slug'], ['text', '/admin/shopping']], [], []],
    'admin_shopping_new' => [[], ['_controller' => 'App\\Controller\\Admin\\ShoppingController::new'], [], [['text', '/admin/shopping/new']], [], []],
    'admin_shopping_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ShoppingController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/admin/shopping/show']], [], []],
    'admin_shopping_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ShoppingController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/shopping']], [], []],
    'admin_shopping_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ShoppingController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/shopping']], [], []],
    'admin_user_index' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::index'], [], [['text', '/admin/user/']], [], []],
    'admin_user_new' => [[], ['_controller' => 'App\\Controller\\Admin\\UserController::new'], [], [['text', '/admin/user/new']], [], []],
    'admin_user_show' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_user_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'admin_user_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/admin/user']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\Home\\HomeController::index'], [], [['text', '/']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\Home\\HomeController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/product']], [], []],
    'home_about' => [[], ['_controller' => 'App\\Controller\\Home\\HomeController::aboutus'], [], [['text', '/aboutus']], [], []],
    'home_contact' => [[], ['_controller' => 'App\\Controller\\Home\\HomeController::contact'], [], [['text', '/contact']], [], []],
    'admin_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/registeradmin']], [], []],
    'user_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registeruser'], [], [['text', '/registeruser']], [], []],
    'login_admin' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/loginadmin']], [], []],
    'login_user' => [[], ['_controller' => 'App\\Controller\\SecurityController::loginuser'], [], [['text', '/loginuser']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'user_index' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/user/']], [], []],
    'user_comments' => [[], ['_controller' => 'App\\Controller\\UserController::comments'], [], [['text', '/user/comments']], [], []],
    'user_new' => [[], ['_controller' => 'App\\Controller\\UserController::new'], [], [['text', '/user/new']], [], []],
    'user_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::show'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id'], ['text', '/user']], [], []],
    'user_edit' => [['id'], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_delete' => [['id'], ['_controller' => 'App\\Controller\\UserController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user']], [], []],
    'user_new_comment' => [['id'], ['_controller' => 'App\\Controller\\UserController::newComment'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/newcomment']], [], []],
    'user_shopping' => [[], ['_controller' => 'App\\Controller\\UserController::shoppings'], [], [['text', '/user/shopping']], [], []],
    'user_shopping_show' => [['id'], ['_controller' => 'App\\Controller\\UserController::shoppingshow'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/user/shopping']], [], []],
    'user_shopping_new' => [['pid'], ['_controller' => 'App\\Controller\\UserController::newShopping'], [], [['variable', '/', '[^/]++', 'pid'], ['text', '/user/shopping']], [], []],
];
