<?php

$counter = 1;
for (; $counter <= 10;) {
    echo "Loop : " . $counter . PHP_EOL;
    $counter++;
}

for ($counter = 0; $counter <= 10;) {
    echo "Loop : " . $counter . PHP_EOL;
    $counter++;
}

for ($counter = 1; $counter <= 10; $counter++) {
    echo "Loop : " . $counter . PHP_EOL;
}

for ($counter = 1; $counter <= 10; $counter++):
    echo "Loop : " . $counter . PHP_EOL;
endfor;
