<?php

// Example 
$data = [
    "action" => "Running ..."
];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = "nothing";
}

echo $action . PHP_EOL;

// With Null Coalescing
$data = [];
$action = $data["action"] ?? "nothing";

echo $action . PHP_EOL;
