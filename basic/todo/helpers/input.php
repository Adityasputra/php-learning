<?php

function input($value)
{
    echo "$value :";
    $result = fgets(STDIN);
    return trim($result);
}
