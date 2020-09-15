<?php
$first = (int)readline( "Write first number: ");
$second = (int)readline("Write second number: ");

if ($first == 15 || $second == 15 || $first+$second == 15 || $first - $second == 15 || $second - $first == 15){
    echo "TRUE" . "\n";
} else {echo "False" . "\n";};
