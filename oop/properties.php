<?php

class Person
{
    // Properties and type declaration
    var string $name;
    // Nullable Properties
    var ?string $address = null;
    // Default Value
    var string $country = "Indonesia";
}

$person = new Person();
// Manipulation properties
$person->name = "Adits";
$person->address = "Sidoarjo";
$person->country = "Indonesia";

echo "My name {$person->name}" . PHP_EOL;
echo "I am from {$person->address},{$person->country}" . PHP_EOL;
