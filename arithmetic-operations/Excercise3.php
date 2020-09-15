<?php

$max = 100;
$min = 1;
$sum = 0;
for($i = $min; $i <= $max; $i++){
    $sum += $i;
};
$avg = ($min + $max) / 2;


echo "The sum of 1 to 100 is $sum" .PHP_EOL . "The average is:  $avg" .PHP_EOL;
