<?php

Echo "Enter a size of the Pyramid: " . PHP_EOL;
$x = (int)(readline());
for($i = 1; $i<=$x; $i++){
    for($t = 0; $t < (4 * ($x - $i)); $t++){
        echo '/';
    }
    for ($t = 0; $t < (8 * ($i -1)); $t++){
        echo"*";
            }
    for ($t = 0; $t <(4 * ($x - $i)); $t++){
        echo chr(92);
    }
    echo PHP_EOL;
}