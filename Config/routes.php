<?php

$router->addRoute(['GET'], '/', 'App\Controllers\IndexController@home');
$router->addRoute(['GET'], '/about', 'App\Controllers\IndexController@about');
$router->addRoute(['GET'], '/contact', 'App\Controllers\IndexController@contact');
$router->addRoute(['GET'], '/users', 'App\Controllers\UsersController@index');
$router->addRoute(['GET', 'POST'], 'user/add', 'App\Controllers\UsersController@add');