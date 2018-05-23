<?php

$query = require 'core/bootstrap.php';

require Router::load('routes.php')
<<<<<<< HEAD
    ->direct(Request::uri());
=======
    ->direct(Request::uri(), Request::method());
>>>>>>> 0ef52ef9865da93707ccd109e00a59e41f663b59
