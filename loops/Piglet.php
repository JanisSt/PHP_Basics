<?php

$roll = 0;
$choice = "D";
$total = 0;
echo "Welcome to Piglet" . PHP_EOL;
while($roll !=1 || $choice == "Y"){
    $roll = rand(1,6);

    echo "You Rolled: " . $roll . PHP_EOL;
    $total += $roll;
    if($roll == 1) {
        echo "YOU LOOSE, total score: 0"; exit;
    }
    echo "Current score: $total" . PHP_EOL;
    echo "Do you want to play again (Y/N): ";
    $choice = strtoupper(readline());
    if ($choice === "N") {
        echo "Total score: $total"; exit;

    }
}
