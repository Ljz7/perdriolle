<?php

App::get('database')->insert('task', [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'status' => $_POST['status'],
    'due_date' => $_POST['due_date'].' '.$_POST['due_time'].':00'
]);
