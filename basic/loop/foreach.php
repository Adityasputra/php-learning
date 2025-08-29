<?php

$names = ["Nakiri Ayame", "Nanashi Mumei", "Hoshimachi Suisei"];

// echo count($names);
// Example
for ($i = 0; $i < count($names); $i++) {
    echo "Hello {$names[$i]}" . PHP_EOL;
}

// Foreach
foreach ($names as $name) {
    echo "Hello {$name}" . PHP_EOL;
}

$person = [
    "firstName" => "Nakiri",
    "lastName" => "Ayame",
];

foreach ($person as $key => $value) {
    echo "$key : $value" . PHP_EOL;
}
