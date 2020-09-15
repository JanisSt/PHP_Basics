<?php

class Geometry
{
    static function circle($radius){
        if ($radius < 0){
            return "ERROR"  . PHP_EOL;}
        else {
            return pi() * $radius *2  . PHP_EOL;
        }
    }

    static function rectangle($length, $width){
        if ($length < 0 || $width <0){
            return "ERROR" . PHP_EOL;}
        else {
            return $length * $width  . PHP_EOL;
        }
    }
    static function triangle($base, $height){
        if ($base < 0 || $height < 0){
            return "ERROR"  . PHP_EOL;}
        else {
            return $base * $height * 0.5  . PHP_EOL;
        }
    }

}
$choice = 0;

while ($choice != 4){
    echo "Geometry Calculator" . PHP_EOL;
    echo "1. Calculate the Area of a Circle" . PHP_EOL;
    echo "2. Calculate the Area of a Rectangle" . PHP_EOL;
    echo "3. Calculate the Area of a Triangle" . PHP_EOL;
    echo "4. Quit" . PHP_EOL;
    echo "Enter your choice (1-4) : " . PHP_EOL;
    $choice = readline();
    if($choice < 1 || $choice > 4){
        echo "Error" . PHP_EOL;
    }
    if ($choice == 1){
        echo "Please insert the Radius of the circle and press Enter: ";
        $cInput = readline();
        echo "Area of a Circle: " . Geometry::circle($cInput);
    }
    if ($choice == 2){
        echo "Please insert the length  of the rectangle and press Enter: ";
        $rlInput = readline();
        echo "Please insert the width  of the rectangle and press Enter: ";
        $rwInput = readline();
        echo "Area of a rectangle: " . Geometry::rectangle($rlInput, $rwInput);
    }
    if ($choice == 3){
        echo "Please insert the length  of the triangles base and press Enter: ";
        $tlInput = readline();
        echo "Please insert the width  of the triangles height and press Enter: ";
        $twInput = readline();
        echo "Area of a triangle: " . Geometry::rectangle($tlInput, $twInput);
    }




}