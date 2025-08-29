<?php

$values = array(1, 2, 3, 4);
var_dump($values);

$names = ["Nakiri Ayame", "Moona Hoshinova", "Nanashi Mumei"];
var_dump($names);

// Operation Array
// Access by index
var_dump($names[0]);

// Change Value
$names[1] = "Usada Pekora";
var_dump($names);

// Delete
unset($names[1]);
var_dump($names);

// Add value
$names[] = "Amane Kanata";
var_dump($names);

// Total Array
var_dump(count($names));

// Map
$adits = array(
    "id" => 1,
    "name" => "Aditya Saputra",
    "age" => 20
);

$desc = [
    "hobby" => "coding",
    "project" => 12,
];

var_dump($adits);
var_dump($desc);

// Array of array
$adits = [
    "id" => 1,
    "name" => "Aditya Saputra",
    "age" => 20,
    "desc" => [
        "hobby" => "Coding",
        "projets" => 15,
    ]
];

var_dump($adits);