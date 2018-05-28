<?php

$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');

$router->get('tasks', 'TasksController@index');
$router->get('new/task', 'TasksController@create');
$router->post('new/task', 'TasksController@store');
