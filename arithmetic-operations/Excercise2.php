<?php

function CheckOddEven($number){
    if(is_int($number)){
    if($number % 2 == 0){
        echo "Even";}
            elseif ($number % 2 != 0){
        echo "Odd";}
            }
            else {
 echo "bye!";

}}

$number = 2;
CheckOddEven($number);
