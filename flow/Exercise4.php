<?php declare(strict_types=1);
//Write a program which prints “Sunday”, “Monday”, ... “Saturday”
// if the int variable "dayNumber" is 0, 1, ..., 6, respectively.
// Otherwise, it shall print "Not a valid day".
//
//Use:
//
//a "nested-if" statement
//a "switch-case-default" statement.

echo "Write the day number: ";
$userInput = readline();

function tester ($X){
    if($X >= 0 && $X <= 6 && ctype_digit($X)){
        return 1;
    } else {return 7;}

}

switch (tester($userInput)) {
    case 0:
        echo "Sunday" .PHP_EOL;
        break;
    case 1:
        echo "Monday" .PHP_EOL;
        break;
    case 2:
        echo "Tuesday" .PHP_EOL;
        break;
    case 3:
        echo "Wednesday" .PHP_EOL;
        break;
    case 4:
        echo "Thursday" .PHP_EOL;
        break;
    case 5:
        echo "Friday" .PHP_EOL;
        break;
    case 6:
        echo "Saturday" .PHP_EOL;
        break;
    case 7:
        echo "Not a valid day" .PHP_EOL;
        break;}
