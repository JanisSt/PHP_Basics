<?php

$ran = rand(1,100);
$guess = 0;

    $guess = (int)readline("Guess a number from 1 to 100: ");

    if($guess < $ran){
        echo "Too low".PHP_EOL;
    };
    if($guess > $ran){
        echo "Too high".PHP_EOL;
    }
if($guess == $ran){
    echo "Correct" .PHP_EOL;
}