<?php

$tasks = $query->selectAll('task', 'Task');

require 'views/index.view.php';
