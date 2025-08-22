<?php

$data = [1, 2, 3, 4, 5];
$datas = [5, 4, 3, 2, 1];
$person = [
    "firstName" => "Nakiri",
    "lastName" => "Ayame"
];

var_dump(array_keys($data));
var_dump(array_keys($person));

var_dump(array_values($data));
var_dump(array_values($person));

var_dump(array_map(fn($data) => $data * 2, $data));

rsort($data);
var_dump($data);

shuffle($datas);
var_dump($datas);
