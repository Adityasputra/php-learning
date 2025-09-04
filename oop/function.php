<?php

class Person
{
    var string $name;
    var string $address;
    var string $country;

    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}

$person = new Person();
$person->sayHello("Adits");
