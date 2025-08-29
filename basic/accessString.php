<?php

$name = "Calliope Mori";

echo $name[0] . PHP_EOL;

// Error
echo $name[20] . PHP_EOL;

// Variable Parsing
echo "Hello $name" . PHP_EOL;

$name = "Adits";
$place = "Metafore School";
echo <<<desc
Hello $name,
Wellcome to $place 
desc . PHP_EOL;

// Curly Brace
echo "{$name}'s" . PHP_EOL;