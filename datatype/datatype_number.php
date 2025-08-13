<?php

// Datatype Integer
echo "Decimal :";
var_dump(1234);

echo "Octal :";
var_dump(01234);

echo "Hexadecimal :";
var_dump(0x1A);

echo "Binary :";
var_dump(0b11111111);

echo "Underscore :";
var_dump(1_000_000);

// Datatype Floating Point
echo "Floating Point: ";
var_dump(1.234);

echo "Floating Point with E notation Plus :";
var_dump(1.2e3);

echo "Floating Point with E notation Minus :";
var_dump(7e-3);

echo "Underscore :";
var_dump(1_000.500);

// Integer Overflow
// 2147483647 for System Opeartion 32 bit
// 9223372036854775807 for System Operation 64 bit

echo "Integer Overflow 32 bit :";
var_dump(2147483647);

echo "Integer Overflow 64 bit :";
var_dump(9223372036854775807);
