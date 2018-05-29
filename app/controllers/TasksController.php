<?php

namespace Task\Controllers;

use Task\Core\App;

class TasksController
{
    public function index()
    {
        $tasks = App::get('database')->selectAll('task', 'Task');

        return view('tasks', compact('tasks'));
    }
    
    public function create()
    {
        return view('new-task');
    }
    
    public function store()
    {
        App::get('database')->insert('task', [
            'title' => $_POST['title'],
            'description' => $_POST['description'],
            'status' => $_POST['status'],
            'due_date' => $_POST['due_date'].' '.$_POST['due_time'].':00'
        ]);

        return redirect('tasks');
    }
}
