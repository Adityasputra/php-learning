<?php

function sayHello()
{
    echo "Hello" . PHP_EOL;
}

sayHello();

// Location
$a = true;

if ($a) {
    function sayHi()
    {
        echo "Hi" . PHP_EOL;
    }
}

sayHi();
