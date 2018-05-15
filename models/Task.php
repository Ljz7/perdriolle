<?php

class Task
{
    private $id;
    private $title;
    private $description;
    private $status;
    private $due_date;
    private $completed = false;

    public function complete()
    {
        $this->completed = true;
    }

    public function isCompleted()
    {
        return $this->completed;
    }

    public function title()
    {
        return $this->title;
    }

    public function description()
    {
        return $this->description;
    }

    public function dueDate()
    {
        return $this->due_date;
    }

    public function status()
    {
        return $this->status;
    }
}

