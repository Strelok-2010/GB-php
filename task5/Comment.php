<?php

class Comment
{
    private User $auther;
    private Task $task;
    private string $text;

    public function __construct(User $auther, Task $task, $text)
    {
        $this->auther = $auther;
        $this->task = $task;
        $this->text = $text;
    }

    public function getTask(): Task
    {
        return $this->task;
    }

    public function getText(): string
    {
        return $this->text;
    }
}