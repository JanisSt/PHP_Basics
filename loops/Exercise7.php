<?php
class RollTwoDice{
    public function Roll(){

echo "Enter the value you wish to roll 2 - 12: ";
$userInput = (int)readline();
echo "Desired sum: " . $userInput.PHP_EOL;
$dice1 = 0;
$dice2 = 0;
while ($dice1 + $dice2 !== $userInput ) {
    $dice1 = rand(1, 6);
    $dice2 = rand(1, 6);
echo $dice1 . " and " . $dice2 . " = " . ($dice1 + $dice2) . PHP_EOL;
}}}

RollTwoDice::Roll();