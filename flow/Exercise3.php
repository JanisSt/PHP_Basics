<?php
//Write a program that reads an positive integer and count the number of digits the number has.

echo "enter a number: ";
$userInput = readline();

if($userInput > 0 && ctype_digit($userInput))
{
    $array  = array_map('intval', str_split($userInput));
echo "Your number has " . count($array) . " digits" .PHP_EOL;
} else echo "Thats not a number!!" .PHP_EOL;