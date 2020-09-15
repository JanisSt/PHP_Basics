<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: " ;
foreach ($numbers as $number){
echo  "$number, ";}

//todo
echo PHP_EOL . "Sorted numeric array: ";
sort ($numbers);
foreach ($numbers as $numb){
    echo  "$numb, ";}

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo PHP_EOL . "Original string array: ";
foreach ($words as $word){
    echo  "$word, ";}
//todo
echo PHP_EOL . "Sorted string array: ";
sort ($words);
foreach ($words as $wor){
    echo  "$wor, ";}
echo PHP_EOL;
