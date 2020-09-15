<?php
$wKG = readline("Your weight in Kilograms: ");
$hM = readline("Your height in Meters: ");


$weight = $wKG * 2.20462262;
$height = $hM * 39.3700787;
$BMI = ($weight * 703) / ($height * $height);
if (18.5 < $BMI && $BMI < 25){
    echo "You have optimal body mass";
}
if($BMI < 18.5){
    echo "You are underweight";
}
if ($BMI > 25){
    echo "You are overweight";
}