<?php 

require 'vendor/autoload.php';

require 'core/bootstrap.php';

use Task\Core\{Router, Request};

Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
