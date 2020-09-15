<?php
function WorkHours($Pay, $HoursWorked){
    $payment = $Pay * $HoursWorked;
    if ($Pay < 8.00 || $HoursWorked > 60){
        echo "Error".PHP_EOL;
    } else
    {    if ($HoursWorked <= 40){
        echo $payment . PHP_EOL;
    }
        if ($HoursWorked > 40){
            echo $payment +  (($HoursWorked - 40 )* ($Pay *1.5)) . PHP_EOL;
        }};

}
WorkHours(7.50, 35);
WorkHours(8.20, 47);
WorkHours(10, 73);