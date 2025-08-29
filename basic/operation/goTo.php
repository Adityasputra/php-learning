<?php

goto a;
echo "Hello A" . PHP_EOL;

a:
echo "Hello a" . PHP_EOL;

$counter = 1;
while (true) {
    echo "Loop : {$counter}" . PHP_EOL;
    $counter++;

    if ($counter > 10) {
        goto end;
    }
}

end:
echo "End Loop" . PHP_EOL;
