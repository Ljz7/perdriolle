<?php

$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('new/task', 'controllers/new-task.php');

$router->post('add/task', 'controllers/add-task.php');
