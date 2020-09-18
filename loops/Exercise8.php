<?php

class NumberSquare
{

    public function numbers()
    {
        echo "Enter starting number: ";
        $start = readline();
        echo "Enter end number: ";
        $end = readline();

        echo "Min? " . $start . PHP_EOL;
        echo "Max? " . $end . PHP_EOL;
        $numbers = range($start, $end);
        foreach ($numbers as $number) {
            echo $number;
        }

        echo PHP_EOL;
        for ($i = 0; $i < count($numbers) - 1; $i++) {

            array_push($numbers, array_shift($numbers));
            foreach ($numbers as $number) {
                echo $number;
            }
            echo PHP_EOL;
        }
    }
}

NumberSquere::numbers();


echo PHP_EOL;