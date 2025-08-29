<?php

$a = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$b = array(
    "b" => "pear",
    "c" => "strowberry"
);

// Union
$c = $a + $b;
var_dump($c);

$c = $b + $a;
var_dump($c);

$b += $a;
var_dump($b);

$a = [
    "firstName" => "Nakiri",
    "lastName" => "Ayame"
];

$b = array(
    "lastName" => "Ayame",
    "firstName" => "Nakiri"
);

// Equality
var_dump($a == $b);

// Identity
var_dump($a === $b);

// Inequality
var_dump($a != $b);

// Inequality
var_dump($a <> $b);

// Non-Identity
var_dump($a !== $b);
