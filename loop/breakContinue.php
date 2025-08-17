<?php

// Break
$counter = 1;

while (true) {
    echo "Loop : {$counter}" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        break;
    }
}

// Continue
for ($counter = 0; $counter <= 100; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }

    echo "Loop : {$counter}" . PHP_EOL;
}
