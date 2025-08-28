<?php

// Assign By Reference
$name = "Adits";

$otherName = &$name;
$otherName = "Z";

echo $name . PHP_EOL;

// Pass by Reference
function increment(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter);

echo $counter . PHP_EOL;

// Returning Reference
function &getValue()
{
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;
