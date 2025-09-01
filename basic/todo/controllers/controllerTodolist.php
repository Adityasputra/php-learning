<?php

function showTodo(array $todolist): void
{
    $width = 40;

    echo str_repeat("=", $width) . PHP_EOL;
    echo str_pad("YOUR TODO LIST", $width, " ", STR_PAD_BOTH) . PHP_EOL;
    echo str_repeat("=", $width) . PHP_EOL;

    if (empty($todolist)) {
        echo "(No todos found)" . PHP_EOL;
    } else {
        foreach ($todolist as $index => $item) {
            printf("%2d. %s" . PHP_EOL, $index + 1, $item);
        }
    }

    echo str_repeat("-", $width) . PHP_EOL;
}

function addTodo(array &$todolist, string $item): void
{
    $todolist[] = $item;
}

function removeTodo(array &$todolist, int $number): bool
{
    if ($number < 1 || $number > count($todolist)) {
        return false;
    }

    array_splice($todolist, $number - 1, 1);
    return true;
}
