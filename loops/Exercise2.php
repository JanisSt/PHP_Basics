<?php

echo "Input number of terms: ";
echo "Input the value: ";
$userValue = readline();
echo "input How many times it must multiply by itself: ";
$userMultiply = readline();
$total = 1;
for ($i=0; $i<$userMultiply; $i++){
    $total *= $userValue;
}
echo $total. PHP_EOL;

////todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
