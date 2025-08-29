<?php

// Example Expression
$a = 5;

$b = $a;

function getValue()
{
    return 100;
}

$value = getValue();

// Example Statement
$name = "Adits";
echo $name;

$date = new DateTime();
var_dump($date);

// Block
function runApp($name)
{
    echo "Start Program" . PHP_EOL;
    echo "Hello $name" . PHP_EOL;
    echo "End Program" . PHP_EOL;
}

runApp($name);
