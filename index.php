<?php 

require 'Task.php';

$due_date = DateTime::createFromFormat('Y-m-d H:i:s', '2018-05-03 09:00:00');

$tasks = [
    new Task(
        'Learn OOP',
        'Improve PHP skills',
        'WIP',
        $due_date->format('Y-m-d')
    ),
    new Task(
        'Subscribe to GitHub',
        'Create a user account on GitHub',
        'To do',
        $due_date->format('Y-m-d')
    ),
    new Task(
        'Install Atom',
        'Install Atom and the Teletype package',
        'To do',
        $due_date->format('Y-m-d')
    ),
];

$tasks[0]->complete();

require 'index.view.php';
