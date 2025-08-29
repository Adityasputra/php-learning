<?php

$value = 100;
$absent = 100;

if ($value >= 80 && $absent >= 80) {
    echo "Great" . PHP_EOL;
} elseif ($value >= 70 && $absent >= 70) {
    echo "Good" . PHP_EOL;
} else {
    echo "Try again" . PHP_EOL;
}

// Alternatif
if ($value >= 80 && $absent >= 80):
    echo "Great" . PHP_EOL;
elseif ($value >= 70 && $absent >= 70):
    echo "Good" . PHP_EOL;
else:
    echo "Try again" . PHP_EOL;
endif;
