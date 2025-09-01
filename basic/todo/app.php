<?php

include_once __DIR__ . "/views/viewTodolist.php";
$todolist = include_once __DIR__ . "/models/modelTodolist.php";

$width = 50;
echo str_repeat("=", $width) . PHP_EOL;
echo str_pad("Welcome to TodoNext", $width, " ", STR_PAD_BOTH) . PHP_EOL;
echo str_pad("An application to help you manage your tasks", $width, " ", STR_PAD_BOTH) . PHP_EOL;
echo str_repeat("=", $width) . PHP_EOL;
echo PHP_EOL;

showTodolist($todolist);
