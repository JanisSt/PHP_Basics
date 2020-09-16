<?php

echo "Enter the number.";
$userInput = readline();
if(is_numeric($userInput)){
if($userInput < 0){
    echo "The number you entered is negative";
}
if ($userInput >= 0){
echo "The number you entered is positive";}}
else {echo "You didnt enter a number!!!";}

//todo print if number is positive or negative
