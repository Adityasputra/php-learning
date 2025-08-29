<?php

function foo()
{
    echo "FOO" . PHP_EOL;
}


function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

function sayHello(string $name, $filter): string
{
    $finalName = $filter($name);
    return $finalName . PHP_EOL;
}

echo sayHello("aditya saputra", "strtoupper");
