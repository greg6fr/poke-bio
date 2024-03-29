<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
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
    'account_address' => [[], ['_controller' => 'App\\Controller\\AccountAddressController::index'], [], [['text', '/compte/adresses']], [], [], []],
    'account_address_add' => [[], ['_controller' => 'App\\Controller\\AccountAddressController::add'], [], [['text', '/compte/ajouter-une-adresse']], [], [], []],
    'account_address_edit' => [['id'], ['_controller' => 'App\\Controller\\AccountAddressController::edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/modifier-une-adresse']], [], [], []],
    'account_address_delete' => [['id'], ['_controller' => 'App\\Controller\\AccountAddressController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/compte/supprimer-une-adresse']], [], [], []],
    'account' => [[], ['_controller' => 'App\\Controller\\AccountController::index'], [], [['text', '/compte']], [], [], []],
    'account_order' => [[], ['_controller' => 'App\\Controller\\AccountOrderController::index'], [], [['text', '/compte/mes-commandes']], [], [], []],
    'account_order_show' => [['reference'], ['_controller' => 'App\\Controller\\AccountOrderController::show'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/compte/mes-commandes']], [], [], []],
    'account_password' => [[], ['_controller' => 'App\\Controller\\AccountPasswordController::index'], [], [['text', '/compte/modifier-mon-mot-de-passe']], [], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\Admin\\DashboardController::index'], [], [['text', '/admin']], [], [], []],
    'cart' => [[], ['_controller' => 'App\\Controller\\CartController::index'], [], [['text', '/mon-panier']], [], [], []],
    'add_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/add']], [], [], []],
    'remove_my_cart' => [[], ['_controller' => 'App\\Controller\\CartController::remove'], [], [['text', '/cart/remove']], [], [], []],
    'delete_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/delete']], [], [], []],
    'decrease_to_cart' => [['id'], ['_controller' => 'App\\Controller\\CartController::decrease'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cart/decrease']], [], [], []],
    'app_cgu' => [[], ['_controller' => 'App\\Controller\\CguController::index'], [], [['text', '/cgu']], [], [], []],
    'app_cgv' => [[], ['_controller' => 'App\\Controller\\CgvController::index'], [], [['text', '/cgv']], [], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/nous-contacter']], [], [], []],
    'app_deletedatas' => [[], ['_controller' => 'App\\Controller\\DeletedatasController::index'], [], [['text', '/deletedatas']], [], [], []],
    'app_generated_database' => [[], ['_controller' => 'App\\Controller\\GeneratedDatabaseController::index'], [], [['text', '/generatedb']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_mentions' => [[], ['_controller' => 'App\\Controller\\MentionsController::index'], [], [['text', '/mentions']], [], [], []],
    'order_cancel' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderCancelController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/erreur']], [], [], []],
    'order' => [[], ['_controller' => 'App\\Controller\\OrderController::index'], [], [['text', '/commande']], [], [], []],
    'order_recap' => [[], ['_controller' => 'App\\Controller\\OrderController::add'], [], [['text', '/commande/recapitulatif']], [], [], []],
    'order_validate' => [['stripeSessionId'], ['_controller' => 'App\\Controller\\OrderSuccessController::index'], [], [['variable', '/', '[^/]++', 'stripeSessionId', true], ['text', '/commande/merci']], [], [], []],
    'products' => [[], ['_controller' => 'App\\Controller\\ProductController::index'], [], [['text', '/nos-produits']], [], [], []],
    'product' => [['slug'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'slug', true], ['text', '/produit']], [], [], []],
    'app_promo' => [[], ['_controller' => 'App\\Controller\\PromoController::index'], [], [['text', '/promo']], [], [], []],
    'app_quisommesnous' => [[], ['_controller' => 'App\\Controller\\QuisommesnousController::index'], [], [['text', '/quisommesnous']], [], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\RegisterController::index'], [], [['text', '/inscription']], [], [], []],
    'reset_password' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::index'], [], [['text', '/mot-de-passe-oublie']], [], [], []],
    'update_password' => [['token'], ['_controller' => 'App\\Controller\\ResetPasswordController::update'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/modifier-mon-mot-de-passe']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/connexion']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/deconnexion']], [], [], []],
    'stripe_create_session' => [['reference'], ['_controller' => 'App\\Controller\\StripeController::index'], [], [['variable', '/', '[^/]++', 'reference', true], ['text', '/commande/create-session']], [], [], []],
];
