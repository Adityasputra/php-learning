<?php

include_once __DIR__ . "../../helpers/input.php";
include_once __DIR__ . "../../controllers/showTodolist.php";

function showTodolist(array &$todolist)
{
    while (true) {
        showTodolistData($todolist);

        echo <<<TEXT
        MENU :
        1. Add Todo
        2. Remove Todo
        x. Exit

        TEXT . PHP_EOL;

        $select = input("Select");

        if ($select == "1") {
            echo "Berhasil add todo";
        } elseif ($select == "2") {
            echo "Berhasil remove todo";
        } elseif ($select == "x") {
            break;
        } else {
            echo "Option is not found";
        }
    }

    echo "Goodbye" . PHP_EOL;
}
