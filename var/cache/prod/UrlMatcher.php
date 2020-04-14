<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/category' => [[['_route' => 'liste_cat', '_controller' => 'App\\Controller\\AdminController::listCategory'], null, null, null, false, false, null]],
        '/admin/category/add' => [[['_route' => 'add_category', '_controller' => 'App\\Controller\\AdminController::createUpdateCategory'], null, null, null, false, false, null]],
        '/admin/product' => [[['_route' => 'liste_product', '_controller' => 'App\\Controller\\AdminController::listProduct'], null, null, null, false, false, null]],
        '/admin/product/add' => [[['_route' => 'add_product', '_controller' => 'App\\Controller\\AdminController::createUpdateProduct'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'liste_user', '_controller' => 'App\\Controller\\AdminController::listClient'], null, null, null, false, false, null]],
        '/admin/order' => [[['_route' => 'liste_order', '_controller' => 'App\\Controller\\AdminController::listOrder'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::listProduct'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\IndexController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\IndexController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\IndexController::logout'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\IndexController::panier'], null, null, null, true, false, null]],
        '/order' => [[['_route' => 'order', '_controller' => 'App\\Controller\\IndexController::order'], null, null, null, false, false, null]],
        '/order/confirm' => [[['_route' => 'order_confirm', '_controller' => 'App\\Controller\\IndexController::orderConfirm'], null, null, null, false, false, null]],
        '/mon_compte' => [[['_route' => 'compte', '_controller' => 'App\\Controller\\IndexController::monCompte'], null, null, null, false, false, null]],
        '/mon_compte/infos' => [[['_route' => 'update_infos', '_controller' => 'App\\Controller\\IndexController::updateInfos'], null, null, null, false, false, null]],
        '/mon_compte/password' => [[['_route' => 'update_password', '_controller' => 'App\\Controller\\IndexController::updatePassword'], null, null, null, false, false, null]],
        '/client/order' => [[['_route' => 'client_order', '_controller' => 'App\\Controller\\IndexController::listOrder'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|category/(?'
                        .'|add/([^/]++)(*:41)'
                        .'|([^/]++)(*:56)'
                    .')'
                    .'|product/(?'
                        .'|add/([^/]++)(*:87)'
                        .'|([^/]++)(*:102)'
                    .')'
                    .'|user/([^/]++)(*:124)'
                    .'|order/([^/]++)(*:146)'
                .')'
                .'|/index/details/([^/]++)(*:178)'
                .'|/panier/(?'
                    .'|add/([^/]++)(*:209)'
                    .'|remove/([^/]++)(*:232)'
                .')'
                .'|/client/order/([^/]++)(*:263)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        41 => [[['_route' => 'update_category', '_controller' => 'App\\Controller\\AdminController::createUpdateCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        56 => [[['_route' => 'delete_cat', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], ['SUP' => 0], null, false, true, null]],
        87 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\AdminController::createUpdateProduct'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        102 => [[['_route' => 'delete_product', '_controller' => 'App\\Controller\\AdminController::deleteProduct'], ['id'], ['SUP' => 0], null, false, true, null]],
        124 => [[['_route' => 'details_user', '_controller' => 'App\\Controller\\AdminController::detailsClient'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'details_order_user', '_controller' => 'App\\Controller\\AdminController::detailsOrderClient'], ['id'], null, null, false, true, null]],
        178 => [[['_route' => 'details_product', '_controller' => 'App\\Controller\\IndexController::detailsProduct'], ['id'], null, null, false, true, null]],
        209 => [[['_route' => 'add_panier', '_controller' => 'App\\Controller\\IndexController::addPanier'], ['id'], null, null, false, true, null]],
        232 => [[['_route' => 'panier_remove', '_controller' => 'App\\Controller\\IndexController::remove'], ['id'], null, null, false, true, null]],
        263 => [
            [['_route' => 'details_order', '_controller' => 'App\\Controller\\IndexController::detailsOrder'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
