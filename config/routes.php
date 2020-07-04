<?php

use Buki\Router;
$router = new Router([
    'paths' => [
        'controllers' => 'app/Controllers',
    ],
    'namespaces' => [
        'controllers' => 'App\Controllers',
    ]
]);
$router->get('', 'MainController@index');
$router->get('delete/:id', 'MainController@delete');
$router->any('edit/:id', 'MainController@edit');
$router->any('add', 'MainController@add');


$router->run();
