<?php

var_dump("");

// Single Quote
echo 'Name :';
echo 'Aditya saputra';
echo "\n";

// Double Quote
echo "Hobby :";
echo "Coding";
echo "\n";

// In Double Quote, you can use escape sequences.
// \n for ENTER, \t for TAB

echo "Adits\t Saputra\n";

// Multiline String
// Heredoc
echo <<<Desc
Name : Adity Saputra
Hobby : Coding
Age : 20
Desc;

// Nowdoc
echo <<<'DESC'
Name : Adity Saputra
Hobby : Coding
Age : 20
DESC;