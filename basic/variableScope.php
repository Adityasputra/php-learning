<?php

$name = "Adits";

// Global
function sayHello()
{
    global $name; // global keyword
    echo "Hello $name" . PHP_EOL;
}

sayHello();

// $GLOBAL variable
function sayGoodBye()
{
    echo "Goodbye {$GLOBALS["name"]}" . PHP_EOL;
}

sayGoodBye();

// Static Scope

function increment()
{
    static $counter = 1;
    echo "Counter : $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
