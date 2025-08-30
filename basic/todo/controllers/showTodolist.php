<?php

function showTodolistData(array $todolist): void
{
    if (empty($todolist)) {
        echo "Your Todo list is empty." . PHP_EOL;
    }

    echo "Your Todo List :" . PHP_EOL;

    foreach ($todolist as $index => $item) {
        echo ($index + 1) . ". {$item}" . PHP_EOL;
    }
}
