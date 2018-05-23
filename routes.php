<?php

<<<<<<< HEAD
$router->define([
    '' => 'controllers/index.php',
    'contact' => 'controllers/contact.php',
    'about' => 'controllers/about.php',
    'croquette' => 'controllers/croquette.php',
    'coquillette' => 'controllers/coquillette.php',
]);
=======
$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->get('new/task', 'controllers/new-task.php');

$router->post('add/task', 'controllers/add-task.php');
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
