<?php

include "Comment.php";
include "Task.php";
include "TaskServise.php";
include "User.php";

$user = new User('User', 'user@mail.ru');
$task = new Task($user, 'Задача номер 1', 6);

TaskService::addComment($user, $task, 'Сделать поскорее');
TaskService::addComment($user, $task, 'Второй комент');

echo "Комментарии" . PHP_EOL;

foreach ($task->getComments() as $comment)
{
    echo $comment->getText() . ", ";
    echo "имя задачи " . $comment->getTask()->getDescription() . PHP_EOL;
}