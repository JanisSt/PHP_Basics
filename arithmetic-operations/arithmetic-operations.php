<?php

//------------Exercise_1------------
//$first = (int)readline( "Write first number: ");
//$second = (int)readline("Write second number: ");

//if ($first == 15 || $second == 15 || $first+$second == 15 || $first - $second == 15 || $second - $first == 15){
//    echo "TRUE" . "\n";
//} else {echo "False" . "\n";};

//------------Exercise_2--------------



//function CheckOddEven($number){
//    if(is_int($number)){
//    if($number % 2 == 0){
//        echo "Even";}
//            elseif ($number % 2 != 0){
//        echo "Odd";}
//            }
//            else {
// echo "bye!";
//
//}}
//
//$number = 2;
//CheckOddEven($number);

//----------------EXERCISE_3----------
//
//$min = 1;
//$max = 100;
//
//$sum = 0;
//for($i = $min; $i <= $max; $i++){
//    $sum += $i;
//};
//$avg = ($min + $max) / 2;
//
//
// echo "The sum of 1 to 100 is $sum" .PHP_EOL . "The average is:  $avg" .PHP_EOL;
//---------Exercise_4--------------
//
//$number = 10;
//$Factorial = 1;
//for($i =1; $i<=$number; $i++){
//    $Factorial *= $i;
//}
//echo $Factorial .PHP_EOL;
//-------------Exercise_5------------

//$ran = rand(1,100);
//$guess = 0;
//
//    $guess = (int)readline("Guess a number from 1 to 100: ");
//
//    if($guess < $ran){
//        echo "Too low".PHP_EOL;
//    };
//    if($guess > $ran){
//        echo "Too high".PHP_EOL;
//    }
//if($guess == $ran){
//    echo "Correct" .PHP_EOL;
//}
//--------------Exercise_6---------------
//coza-loza-woza

//------------_Exercise_7----------------

//$t = 10;
//$a = -9.81;
//$Vi = 0;
//$Xi = 0;
//
//$X = 0.5 * $a*($t*$t)+$Vi*$t+$Xi;
//echo "$X m" ;
//--------------Exercise_8----------------
//function WorkHours($Pay, $HoursWorked){
//    $payment = $Pay * $HoursWorked;
//    if ($Pay < 8.00 || $HoursWorked > 60){
//        echo "Error".PHP_EOL;
//    } else
//    {    if ($HoursWorked <= 40){
//        echo $payment . PHP_EOL;
//    }
//        if ($HoursWorked > 40){
//            echo $payment +  (($HoursWorked - 40 )* ($Pay *1.5)) . PHP_EOL;
//        }};
//
//}
//WorkHours(7.50, 35);
//WorkHours(8.20, 47);
//WorkHours(10, 73);
//--------------Exercise_9-------------------
//$wKG = readline("Your weight in Kilograms: ");
//$hM = readline("Your height in Meters: ");
//
//
//$weight = $wKG * 2.20462262;
//$height = $hM * 39.3700787;
//$BMI = ($weight * 703) / ($height * $height);
//if (18.5 < $BMI && $BMI < 25){
//    echo "You have optimal body mass";
//}
//if($BMI < 18.5){
//    echo "You are underweight";
//}
//if ($BMI > 25){
//    echo "You are overweight";
//}
//---------------Exercise_10----------------
//class Geometry
//{
//static function circle($radius){
//    if ($radius < 0){
//        return "ERROR"  . PHP_EOL;}
//            else {
//                return pi() * $radius *2  . PHP_EOL;
//            }
//        }
//
//static function rectangle($length, $width){
//    if ($length < 0 || $width <0){
//        return "ERROR" . PHP_EOL;}
//            else {
//                return $length * $width  . PHP_EOL;
//            }
//        }
//static function triangle($base, $height){
//    if ($base < 0 || $height < 0){
//        return "ERROR"  . PHP_EOL;}
//            else {
//                return $base * $height * 0.5  . PHP_EOL;
//            }
//    }
//
//}
//$choice = 0;
//
//while ($choice != 4){
//    echo "Geometry Calculator" . PHP_EOL;
//    echo "1. Calculate the Area of a Circle" . PHP_EOL;
//    echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
//    echo "3. Calculate the Area of a Triangle" . PHP_EOL;
//    echo "4. Quit" . PHP_EOL;
//    echo "Enter your choice (1-4) : " . PHP_EOL;
//    $choice = readline();
//    if($choice < 1 || $choice > 4){
//        echo "Error" . PHP_EOL;
//    }
//    if ($choice == 1){
//        echo "Please insert the Radius of the circle and press Enter: ";
//        $cInput = readline();
//        echo "Area of a Circle: " . Geometry::circle($cInput);
//    }
//    if ($choice == 2){
//        echo "Please insert the length  of the rectangle and press Enter: ";
//        $rlInput = readline();
//        echo "Please insert the width  of the rectangle and press Enter: ";
//        $rwInput = readline();
//        echo "Area of a rectangle: " . Geometry::rectangle($rlInput, $rwInput);
//    }
//    if ($choice == 3){
//        echo "Please insert the length  of the triangles base and press Enter: ";
//        $tlInput = readline();
//        echo "Please insert the width  of the triangles height and press Enter: ";
//        $twInput = readline();
//        echo "Area of a triangle: " . Geometry::rectangle($tlInput, $twInput);
//    }
//
//
//
//
//}