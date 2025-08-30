<?php

include_once __DIR__ . "/views/showTodolist.php";
$todolist = include_once __DIR__ . "/models/todolist.php";


echo <<<TEXT
=============
Welcome To TodoNext
An application to help you manage your tasks
=============


TEXT;

showTodolist($todolist);
