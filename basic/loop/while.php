<?php

$counter = 1;

while ($counter <= 10) {
    echo "Loop : {$counter}" . PHP_EOL;
    $counter++;
}

$counter = 1;

while ($counter <= 10) :
    echo "Loop : {$counter}" . PHP_EOL;
    $counter++;
endwhile;
