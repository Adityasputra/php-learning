<?php

$sayHello = function (string $name): string {
    return $name . PHP_EOL;
};

echo $sayHello("Adits");

function sayGoodBye(string $name, $filter): string
{
    $finalName = $filter($name);
    return "Goodbye $finalName" . PHP_EOL;
}

echo sayGoodBye("aditya", function (string $name): string {
    return strtoupper($name);
});

$firstName = "Nakiri";
$lastName = "Ayame";

$sayHello = function () use ($firstName, $lastName): string {
    $finalName = $firstName . " " . $lastName;
    return "Hello $finalName" . PHP_EOL;
};

echo $sayHello();
