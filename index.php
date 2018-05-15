<?php 

$query = require 'core/bootstrap.php';

$tasks = $query->selectAll('task', 'Task');

$tasks[0]->complete();

require 'views/index.view.php';
