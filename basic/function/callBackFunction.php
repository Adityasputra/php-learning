<?php

function sayHello(string $name, callable $filter): string
{
    $finalName = call_user_func($filter, $name);
    return "Hello $finalName" . PHP_EOL;
}

echo sayHello("aditya", function ($name) {
    return strtoupper($name);
});

echo sayHello("aditya", fn($name) => strtoupper($name));

echo sayHello("aditya", "strtoupper");
