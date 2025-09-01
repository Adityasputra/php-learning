<?php

function input(string $label): string
{
    if ($label !== "") {
        echo $label . ": ";
    }

    $result = fgets(STDIN);
    return trim($result);
}
