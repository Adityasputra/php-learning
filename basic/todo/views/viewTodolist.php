<?php

include_once __DIR__ . "/../helpers/input.php";
include_once __DIR__ . "/../controllers/controllerTodolist.php";

function showTodolist(array &$todolist): void
{
    while (true) {
        showTodo($todolist);

        echo <<<TEXT
MENU :
1. Add Todo
2. Remove Todo
x. Exit

TEXT . PHP_EOL;

        $select = trim(input("Select"));

        if ($select === "1") {
            showAddTodolist($todolist);
        } elseif ($select === "2") {
            showRemoveTodolist($todolist);
        } elseif ($select === "x") {
            break;
        } else {
            echo "Option is not found" . PHP_EOL;
        }

        echo str_repeat("-", 40) . PHP_EOL;
    }

    echo "Goodbye!" . PHP_EOL;
}

function showAddTodolist(array &$todolist): void
{
    echo "Add Todo" . PHP_EOL;

    $item = trim(input("Todo (x to cancel)"));

    if ($item === "x") {
        echo "Cancelled" . PHP_EOL;
        return;
    }

    if ($item === "") {
        echo "Todo cannot be empty!" . PHP_EOL;
        return;
    }

    addTodo($todolist, $item);
    echo "Successfully added todo: {$item}" . PHP_EOL;
}

function showRemoveTodolist(array &$todolist): void
{
    echo "Remove Todo" . PHP_EOL;

    $number = trim(input("Number (x to cancel)"));

    if ($number === "x") {
        echo "Cancelled" . PHP_EOL;
        return;
    }

    if (!ctype_digit($number)) {
        echo "Invalid input, please enter a number." . PHP_EOL;
        return;
    }

    $number = (int) $number;

    if (removeTodo($todolist, $number)) {
        echo "Successfully removed todo number {$number}" . PHP_EOL;
    } else {
        echo "Failed to remove todo number {$number}" . PHP_EOL;
    }
}
