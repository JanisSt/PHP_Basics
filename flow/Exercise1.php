
<?php
echo "Input the 1st number: ";
$first = readline();
echo "Input the 2nd number: ";
$second = readline();
echo "Input the 3rd number: ";
$third = readline();

$array =[
    "first" => $first,
    "second" => $second,
    "third" => $third,

];
echo "Largest number is: " . max($array) . PHP_EOL;
//todo print the largest number