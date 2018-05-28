<?php

use Task\Core\App;
use Task\Core\Database\{QueryBuilder, Connection};

App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));

function view($name, $data = [])
{
    extract($data);

    return require "views/{$name}.view.php";
}

function redirect($path)
{
    return header("Location: /{$path}");
}
