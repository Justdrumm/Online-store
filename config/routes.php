<?php
return array (
    'test3/product/([0-9]+)' => 'product/view/$1', //actionIndex ProductController
    'test3/catalog' => 'catalog/index', //actionIndex CatalogController
    'test3/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2', //actionCategory CatalogController
    'test3/category/([0-9]+)' => 'catalog/category/$1', //actionCategory CatalogController

    // Управление товарами:
    'test3/admin/product/create' => 'adminProduct/create',
    'test3/admin/product/update/([0-9]+)' => 'adminProduct/update/$1',
    'test3/admin/product/delete/([0-9]+)' => 'adminProduct/delete/$1',
    'test3/admin/product' => 'adminProduct/index',
    // Управление категориями:
    'test3/admin/category/create' => 'adminCategory/create',
    'test3/admin/category/update/([0-9]+)' => 'adminCategory/update/$1',
    'test3/admin/category/delete/([0-9]+)' => 'adminCategory/delete/$1',
    'test3/admin/category' => 'adminCategory/index',
    // Управление заказами:
    'test3/admin/order/update/([0-9]+)' => 'adminOrder/update/$1',
    'test3/admin/order/delete/([0-9]+)' => 'adminOrder/delete/$1',
    'test3/admin/order/view/([0-9]+)' => 'adminOrder/view/$1',
    'test3/admin/order' => 'adminOrder/index',


    'test3/admin'=> 'admin/index',




    'test3/cart/checkout' => 'cart/checkout', // actionCheckOut в CartController
    'test3/cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
    'test3/cart/add/([0-9]+)' => 'cart/add/$1',
    'test3/cart' => 'cart/index',

    'test3/register' => 'user/register',
    'test3/user/login' => 'user/login',
    'test3/user/logout' => 'user/logout',

    'test3/cabinet/edit' => 'cabinet/edit',
    'test3/cabinet' => 'cabinet/index',


    'test3' => 'site/index', //actionIndex SiteController


);