<?php

$name = "Adits";

// Global
function sayHello()
{
    global $name;
    echo "Hello $name" . PHP_EOL;
}

sayHello();


